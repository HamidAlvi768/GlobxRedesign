Excellent news\! The provided JavaScript and CSS files already work together to create the exact effect you're looking for. The code is set up to animate the current foreground illustration out to the right one second before the main content switches to the next service.

Here’s a breakdown of how it works:

### **JavaScript: `services.js`**

The magic happens in the `activateServiceByIndex` function.

1.  **Triggering the Animation:** When the function is called, it immediately finds the current active foreground illustration (`outgoingFg`) and adds a special CSS class to it:

    ```javascript
    if (outgoingFg) {
      outgoingFg.classList.add('gx-service-illustration-foreground--slide-out');
    }
    ```

2.  **Waiting for One Second:** The code then pauses for exactly one second (1000 milliseconds) using `setTimeout`. The slide-out animation of the foreground image happens during this pause.

    ```javascript
    setTimeout(() => {
      // ... content switching happens in here ...
    }, 1000); // 1-second delay
    ```

3.  **Switching the Content:** *After* the one-second delay is over, the code inside the `setTimeout` function runs. This is where it removes the `gx-service-pane-active` class from the old pane and adds it to the new one, making the next service visible.

### **CSS: `services.css`**

The `.gx-service-illustration-foreground--slide-out` class that the JavaScript adds is defined in your CSS file.

  * This class specifically handles the "animate out" effect. It moves the illustration 60px to the right and fades it to 0 opacity over a period of 0.6 seconds.

    ```css
    .gx-service-illustration-foreground--slide-out {
      transition: transform 0.6s cubic-bezier(0.4,0,0.2,1), opacity 0.6s cubic-bezier(0.4,0,0.2,1) !important;
      transform: translateX(60px) !important;
      opacity: 0 !important;
      z-index: 3;
    }
    ```

Because the CSS animation (`0.6s`) completes within the JavaScript delay (`1s`), you get the desired effect: the image slides out first, and then the rest of the content switches.

https://globx.eu/newversion/index.php#

https://globx.eu/newversion/about-us/index.php#

https://globx.eu/newversion/society/index.php#

https://globx.eu/newversion/careers/index.php#

https://globx.eu/newversion/job-application/index.php#