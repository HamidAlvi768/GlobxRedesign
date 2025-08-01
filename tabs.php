<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up / Sign In Tabs</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .tab-container {
            background: #f5f5f7;
            border-radius: 50px;
            padding: 4px;
            display: flex;
            gap: 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
            width: fit-content;
        }

        .tab-button {
            padding: 16px 32px;
            border: none;
            border-radius: 46px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            white-space: nowrap;
            min-width: 120px;
            text-align: center;
        }

        .tab-button.signup {
            background: transparent;
            color: #8e8e93;
            border-radius: 46px 0 0 46px;
        }

        .tab-button.signup:hover {
            background: rgba(142, 142, 147, 0.1);
            color: #6d6d70;
        }

        .tab-button.signin {
            background: #2d3a87;
            color: #ffffff;
            box-shadow: 0 2px 8px rgba(45, 58, 135, 0.25);
            border-radius: 0 46px 46px 0;
        }

        .tab-button.signin:hover {
            background: #253074;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(45, 58, 135, 0.3);
        }

        .tab-button.signin:active {
            transform: translateY(0);
            box-shadow: 0 2px 6px rgba(45, 58, 135, 0.25);
        }

        /* Active state animation */
        .tab-button:active {
            transform: scale(0.98);
        }

        /* Focus states for accessibility */
        .tab-button:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(45, 58, 135, 0.2);
        }

        .tab-button.signup:focus {
            box-shadow: 0 0 0 3px rgba(142, 142, 147, 0.2);
        }
    </style>
</head>
<body>
    <div class="tab-container">
        <button class="tab-button signup" onclick="handleSignUp()">Sign up</button>
        <button class="tab-button signin" onclick="handleSignIn()">Sign in</button>
    </div>

    <script>
        function handleSignUp() {
            // Toggle active states
            const signupBtn = document.querySelector('.tab-button.signup');
            const signinBtn = document.querySelector('.tab-button.signin');
            
            // Switch the classes and update border-radius
            signupBtn.classList.add('signin');
            signupBtn.classList.remove('signup');
            signupBtn.style.borderRadius = '46px 0 0 46px';
            
            signinBtn.classList.add('signup');
            signinBtn.classList.remove('signin');
            signinBtn.style.borderRadius = '0 46px 46px 0';
            
            console.log('Sign up clicked');
        }

        function handleSignIn() {
            // Reset to original state
            const signupBtn = document.querySelector('.tab-button.signup');
            const signinBtn = document.querySelector('.tab-button.signin');
            
            if (signupBtn.classList.contains('signin')) {
                signupBtn.classList.remove('signin');
                signupBtn.classList.add('signup');
                signupBtn.style.borderRadius = '46px 0 0 46px';
                
                signinBtn.classList.remove('signup');
                signinBtn.classList.add('signin');
                signinBtn.style.borderRadius = '0 46px 46px 0';
            }
            
            console.log('Sign in clicked');
        }

        // Add subtle animations on page load
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.querySelector('.tab-container');
            container.style.opacity = '0';
            container.style.transform = 'translateY(10px)';
            
            setTimeout(() => {
                container.style.transition = 'all 0.3s ease';
                container.style.opacity = '1';
                container.style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
</body>
</html>