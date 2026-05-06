/**
 * Gallery Caption Read More Functionality
 * Adds read more/close buttons for truncated gallery captions on mobile
 */
(function($) {
    'use strict';
    
    $(document).ready(function() {
        // Only apply on mobile/tablet devices
        if ($(window).width() <= 991) {
            initGalleryCaptions();
        }
        
        // Re-initialize on window resize
        let resizeTimer;
        $(window).on('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if ($(window).width() <= 991) {
                    initGalleryCaptions();
                } else {
                    removeReadMore();
                }
            }, 250);
        });
    });
    
    function initGalleryCaptions() {
        $('.gallery-img p').each(function() {
            const $caption = $(this);
            
            // Skip if already processed
            if ($caption.hasClass('caption-processed')) {
                return;
            }
            
            $caption.addClass('caption-processed');
            
            // Store original text
            const fullText = $caption.text().trim();
            $caption.data('full-text', fullText);
            
            // Check if text is longer than 30 characters
            if (fullText.length > 30) {
                // Truncate text to 30 characters
                const truncatedText = fullText.substring(0, 30) + '...';
                $caption.text(truncatedText);
                $caption.data('truncated', true);
                
                // Add read more button with icon
                if (!$caption.next('.caption-read-more').length) {
                    const $readMore = $('<button class="caption-read-more" aria-label="Read more"><i class="fa fa-chevron-down"></i></button>');
                    $caption.after($readMore);
                    
                    // Click handler
                    $readMore.on('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        toggleCaption($caption, $readMore);
                    });
                }
            } else {
                // Text is 30 characters or less, show as-is with no button
                $caption.data('truncated', false);
            }
        });
    }
    
    function isTextTruncated(element) {
        // Check if the content is being clipped
        return element.scrollHeight > element.clientHeight || 
               element.scrollWidth > element.clientWidth;
    }
    
    function toggleCaption($caption, $button) {
        const isExpanded = $caption.hasClass('expanded');
        const fullText = $caption.data('full-text');
        
        if (isExpanded) {
            // Collapse
            $caption.removeClass('expanded');
            const truncatedText = fullText.substring(0, 30) + '...';
            $caption.text(truncatedText);
            $button.html('<i class="fa fa-chevron-down"></i>').removeClass('close-btn').attr('aria-label', 'Read more');
        } else {
            // Expand
            $caption.addClass('expanded');
            $caption.text(fullText);
            $button.html('<i class="fa fa-chevron-up"></i>').addClass('close-btn').attr('aria-label', 'Close');
        }
    }
    
    function removeReadMore() {
        $('.gallery-img p').removeClass('caption-processed expanded');
        $('.caption-read-more').remove();
    }
    
})(jQuery);
