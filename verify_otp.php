<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP | SkillHire</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #1E40AF 0%, #2563EB 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .otp-input {
            letter-spacing: 0.5em;
            text-align: center;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center py-24">
        <div class="max-w-md w-full bg-white p-10 rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50">
            <div class="text-center mb-12">
                <h1 class="text-4xl lg:text-5xl font-bold mb-6">
                    Verify Your <span class="gradient-text">Email</span>
                </h1>
                <p class="text-xl text-gray-600">
                    We've sent a 6-digit verification code to your email address
                </p>
            </div>

            <form action="check_otp.php" method="POST" class="space-y-8">
                <div>
                    <label class="block text-2xl font-semibold text-gray-900 mb-4 text-center">
                        Enter Verification Code
                    </label>
                    <input type="text" name="otp" required maxlength="6"
                           class="w-full px-6 py-4 text-2xl border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500 otp-input"
                           placeholder="000000">
                </div>

                <button type="submit" 
                        class="w-full bg-blue-600 text-white text-lg font-medium py-4 px-8 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                    Verify & Continue
                </button>
            </form>
            
            <div class="mt-10 text-center space-y-4">
                <p class="text-lg text-gray-600">
                    Didn't receive the code?
                </p>
                <button onclick="resendOTP()" 
                        class="text-lg text-blue-600 hover:text-blue-700 font-medium">
                    Resend Code
                </button>
                <p id="countdown" class="text-sm text-gray-500 hidden">
                    Resend available in <span id="timer">60</span> seconds
                </p>
            </div>
        </div>
    </div>

    <script>
        function resendOTP() {
            document.getElementById('countdown').classList.remove('hidden');
            let timeLeft = 60;
            const timerElement = document.getElementById('timer');
            
            const countdown = setInterval(() => {
                timeLeft--;
                timerElement.textContent = timeLeft;
                
                if (timeLeft <= 0) {
                    clearInterval(countdown);
                    document.getElementById('countdown').classList.add('hidden');
                }
            }, 1000);
        }

        // Format OTP input
        const otpInput = document.querySelector('input[name="otp"]');
        otpInput.addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6);
        });
    </script>
</body>
</html>