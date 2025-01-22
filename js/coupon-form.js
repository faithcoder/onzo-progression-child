document.addEventListener('DOMContentLoaded', function() {
    let didClick = false; // Tracks if the button has already been clicked

    /**
     * Update the button text from "Add a coupon" to "Promo code/coupon".
     */
    function updateButtonText(button) {
        button.childNodes.forEach(function(node) {
            // Check if this node is text and exactly matches "Add a coupon"
            console.log("change")
            if (
                node.nodeType === Node.TEXT_NODE &&
                node.nodeValue.trim() === 'Add a coupon'
            ) {
                node.nodeValue = 'Promo code/coupon';
            }
            console.log(node)
        });
    }

    /**
     * Click the button only once, then block future clicks.
     */
    function autoClickButton(button) {
        // First, update the text before clicking
        updateButtonText(button);

        // If not clicked yet, click now
        if (!didClick) {
            didClick = true;
            button.click();
            blockFutureClicks(button);
        }
    }

    /**
     * Prevent any future clicks after the first by stopping propagation.
     */
    function blockFutureClicks(button) {
        button.addEventListener('click', function(e) {
            e.stopPropagation();
            e.preventDefault();
        }, true);
    }

    /**
     * Try to find the button, auto-click once, and return true if found.
     */
    function checkAndClick() {
        const button = document.querySelector('.checkout-coupon-block .wc-block-components-panel__button');
        if (button) {
            autoClickButton(button);
            return true;
        }
        return false;
    }

    // 1) On DOMContentLoaded, check if the button is already there
    if (checkAndClick()) {
        // If found and clicked, no need for the observer
        return;
    }

    // 2) If not found, observe for DOM changes so we can do this once later
    const observer = new MutationObserver(function() {
        if (checkAndClick()) {
            // Found it, clicked once, stop observing
            observer.disconnect();
        }
    });

    observer.observe(document.body, {
        childList: true,
        subtree: true
    });
});


