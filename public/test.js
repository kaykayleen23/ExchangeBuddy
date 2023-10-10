const url = 'https://api.frankfurter.app/latest?from=USD&to=PHP';

fetch(url)
  .then(response => response.json())
  .then(data => {
    const rates = `1 DOLLAR= ${data.rates.PHP} PESO`;
    console.log(rates);
  });