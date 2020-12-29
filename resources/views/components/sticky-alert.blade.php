<div class="sticky-alerts"></div>

<script type="text/javascript" defer>
    // Toasts a default alert
    const toastAlert = (content, title, alertType, fillType, hasDismissButton, timeShown) => {
        // Built-in function
        halfmoon.initStickyAlert({
            content: content || "Content",                 // Required, main content of the alert, type: string (can contain HTML)
            title: title || "Title",                       // Optional, title of the alert, default: "", type: string
            alertType: alertType || "",                    // Optional, type of the alert, default: "", must be "alert-primary" || "alert-success" || "alert-secondary" || "alert-danger"
            fillType: fillType || "",                      // Optional, fill type of the alert, default: "", must be "filled-lm" || "filled-dm" || "filled"
            hasDismissButton: hasDismissButton || true,    // Optional, the alert will contain the close button if true, default: true, type: boolean
            timeShown: timeShown || 5000                   // Optional, time the alert stays on the screen (in ms), default: 5000, type: number
        })
    };
</script>
