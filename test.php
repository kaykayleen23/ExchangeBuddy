<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/msdropdown/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="js/msdropdown/jquery.dd.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/msdropdown/dd.css" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@300;400;600&family=Syne:wght@400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./dist/output.css">
    <link rel="icon" type="image/x-icon" href="/images/icon.png">
</head>

<body class=" bg-gray-50 min-h-screen ">
    <!--hero section-->
    <div>
        <div>
            <h1 class="text-center text-4xl pt-24">Welcome to ExchnageBuddy!</h1>
            <div class=" flex items-center justify-center pt-16 pb-7 w-full">
                <div class="relative w-full max-w-3xl">
                    <div
                        class="absolute top-0 -left-4 w-72 h-96 bg-purple-900 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob">
                    </div>
                    <div
                        class="absolute top-0 -right-4 w-72 h-96 bg-blue-900 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000">
                    </div>
                    <div
                        class="absolute -bottom-2 left-48 w-72 h-96 bg-teal-900 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000">
                    </div>

                    <div class="relative flex items-center h-10 rounded-t-lg">
                        <button id="btn1" class="w-2/4 h-full rounded-tl-lg bg-cyan-800 text-white"
                            onclick="toggleForms('form1')">Convert</button>
                        <button id="btn2" class="w-2/4 h-full rounded-tr-lg bg-cyan-800 text-white"
                            onclick="toggleForms('form2')">Alerts</button>
                    </div>

                    <!-- CONVERT FORM -->
                    <div class="relative space-y-4">
                        <div class=" h-64 bg-white rounded-b-lg shadow-2xl">
                            <form id="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                method="POST">
                                <div class="grid grid-cols-3 gap-4 px-5 py-10">
                                    <div>
                                        <label for="amount"
                                            class="block text-md font-medium leading-6 text-gray-900">Amount</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input type="number" name="amount" id="amount" autocomplete="amount"
                                                    class=" font-[ALbert Sans] block flex-1 rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 sm:text-sm sm:leading-6"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <!--FROM-->
                                    <div>
                                        <label for="from"
                                            class="block text-md font-medium leading-6 text-gray-900">From</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <select name="from" id="from" autocomplete="from" class="block flex-1 border-0 rounded-md bg-transparent py-1.5 pl-1 
                        text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                                    <option value="">Select</option>
                                                    <option value="USD">USD</option>
                                                    <option value="EUR">EUR</option>
                                                    <option value="JPY">JPY</option>
                                                    <option value="BGN">BGN</option>
                                                    <option value="CZK">CZK</option>
                                                    <option value="DKK">DKK</option>
                                                    <option value="GBP">GBP</option>
                                                    <option value="HUF">HUF</option>
                                                    <option value="PLN">PLN</option>
                                                    <option value="RON">RON</option>
                                                    <option value="SEK">SEK</option>
                                                    <option value="CHF">CHF</option>
                                                    <option value="ISK">ISK</option>
                                                    <option value="NOK">NOK</option>
                                                    <option value="TRY">TRY</option>
                                                    <option value="AUD">AUD</option>
                                                    <option value="BRL">BRL</option>
                                                    <option value="CAD">CAD</option>
                                                    <option value="CNY">CNY</option>
                                                    <option value="HKD">HKD</option>
                                                    <option value="IDR">IDR</option>
                                                    <option value="ILS">ILS</option>
                                                    <option value="INR">INR</option>
                                                    <option value="KRW">KRW</option>
                                                    <option value="MXN">MXN</option>
                                                    <option value="MYR">MYR</option>
                                                    <option value="NZD">NZD</option>
                                                    <option value="PHP">PHP</option>
                                                    <option value="SGD">SGD</option>
                                                    <option value="THB">THB</option>
                                                    <option value="ZAR">ZAR</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!--TO-->
                                    <div>
                                        <label for="to"
                                            class="block text-md font-medium leading-6 text-gray-900">To</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <select onchange="showValue(this.value)" name="to" id="to"
                                                    autocomplete="to" class="block flex-1 border-0 rounded-md bg-transparent py-1.5 pl-1 
                        text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                                    <!-- Add currency options dynamically or manually -->
                                                    <option value="">Select</option>
                                                    <option value="USD" data-image="./images/united-states.png">USD
                                                    </option>
                                                    <option value="EUR" data-image="./images/european-union.png">EUR
                                                    </option>
                                                    <option value="JPY" data-image="./images/japan.png">JPY</option>
                                                    <option value="BGN">BGN</option>
                                                    <option value="CZK">CZK</option>
                                                    <option value="DKK">DKK</option>
                                                    <option value="GBP">GBP</option>
                                                    <option value="HUF">HUF</option>
                                                    <option value="PLN">PLN</option>
                                                    <option value="RON">RON</option>
                                                    <option value="SEK">SEK</option>
                                                    <option value="CHF">CHF</option>
                                                    <option value="ISK">ISK</option>
                                                    <option value="NOK">NOK</option>
                                                    <option value="TRY">TRY</option>
                                                    <option value="AUD">AUD</option>
                                                    <option value="BRL">BRL</option>
                                                    <option value="CAD">CAD</option>
                                                    <option value="CNY">CNY</option>
                                                    <option value="HKD">HKD</option>
                                                    <option value="IDR">IDR</option>
                                                    <option value="ILS">ILS</option>
                                                    <option value="INR">INR</option>
                                                    <option value="KRW">KRW</option>
                                                    <option value="MXN">MXN</option>
                                                    <option value="MYR">MYR</option>
                                                    <option value="NZD">NZD</option>
                                                    <option value="PHP">PHP</option>
                                                    <option value="SGD">SGD</option>
                                                    <option value="THB">THB</option>
                                                    <option value="ZAR">ZAR</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- <div class="flex inline-block">
                                <p class="text-gray-500 text-sm ml-5">Amount</p>
                                    <p class="text-gray-500 text-sm mx-2">From</p>
                                    <p class="text-gray-500 text-sm mx-2">=</p>
                                    <p class="text-gray-500 text-sm mx-2" id="conversionAmount"></p>
                                </div> -->
                                <div>
                                    <h3 class="text-gray-700 text-lg mx-5">Total</h3>
                                    <p class="text-gray-500 text-sm mx-5 mt-1" id="conversionResult"></p>
                                </div>
                                <div class="flex items-center justify-end">
                                    <button type="button" class="text-cyan-700 hover:text-white border border-cyan-700 hover:bg-cyan-800 focus:ring-4 
                                                focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 
                                                text-center mx-5 dark:border-cyan-400 dark:text-cyan-400 dark:hover:text-white 
                                                dark:hover:bg-cyan-500 dark:focus:ring-cyan-900" onclick="convert()">
                                        Convert</button>
                                </div>
                            </form>

                            <!-- ALERT FORM -->
                            <form action="" class="hidden" id="form2">
                                <h2 class="text-md py-7 text-center px-5">Want to be notified when the exchange rate
                                    changes
                                    to your
                                    desired amount? Subscribe here!</h2>
                                <div class="grid grid-cols-2 gap-4 px-5 pb-10">
                                    <div>
                                        <label for="amount"
                                            class="block text-md font-medium leading-6 text-gray-900">Amount</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input type="number" name="amount" id="amount" autocomplete="amount"
                                                    class="block flex-1 rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 sm:text-sm sm:leading-6"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="email"
                                            class="block text-md font-medium leading-6 text-gray-900">Email</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input type="email" name="email" id="email"
                                                    class="block flex-1 border-0 rounded-md bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end">
                                    <button type="button"
                                        class="text-cyan-700 hover:text-white border border-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-1 mx-5 dark:border-cyan-400 dark:text-cyan-400 dark:hover:text-white dark:hover:bg-cyan-500 dark:focus:ring-cyan-900">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function toggleForms(formId) {
            const form1 = document.getElementById('form1');
            const form2 = document.getElementById('form2');
            const btn1 = document.getElementById('btn1');
            const btn2 = document.getElementById('btn2');

            if (formId === 'form1') {
                // Show Form 1 and hide Form 2
                form1.classList.remove('hidden');
                form2.classList.add('hidden');
                // Set focus on Button 1
                btn1.focus();
                // Change color of Button 1
                btn1.classList.add('bg-white', 'text-cyan-800');
                // Reset color of Button 2
                btn2.classList.remove('bg-white', 'text-cyan-800');
            } else {
                // Show Form 2 and hide Form 1
                form2.classList.remove('hidden');
                form1.classList.add('hidden');
                // Set focus on Button 2
                btn2.focus();
                // Change color of Button 2
                btn2.classList.add('bg-white', 'text-cyan-800');
                // Reset color of Button 1
                btn1.classList.remove('bg-white', 'text-cyan-800');
            }
        }
    </script>

    <script>

        function convert() {
            const host = 'api.frankfurter.app';

            // Get values from input fields
            const fromCurrency = document.getElementById('from').value;
            const toCurrency = document.getElementById('to').value;
            const amount = document.getElementById('amount').value;

            if (!fromCurrency || !toCurrency || !amount) {
                alert("Please enter valid 'Amount,' 'From,' and 'To' values.");
                return;
            }

            const apiUrl = `https://${host}/latest?amount=${amount}&from=${fromCurrency}&to=${toCurrency}`;

            fetch(apiUrl)
                .then(resp => resp.json())
                .then((data) => {
                    console.log(data); // Log the API response
                    const resultText = `${amount} ${fromCurrency} = ${data.rates[toCurrency]} ${toCurrency}`;
                    const resultAmount = `${amount} ${fromCurrency} `;
                    // Update the content of the <p> element with the result
                    document.getElementById('conversionResult').textContent = resultText;
                    document.getElementById('conversionAmount').textContent = resultAmount;

                    // Your additional code using the fetched API data can go here

                    // For example:
                    // const additionalData = data.someOtherValue;
                    // document.getElementById('additionalResult').textContent = `Additional Result: ${additionalData}`;
                })
                .catch(error => {
                    console.error("API request error:", error); // Log any errors
                });
        }
    </script>
</body>

</html>