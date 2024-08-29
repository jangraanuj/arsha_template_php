// Your JavaScript code goes here
// Function to calculate EMI, total payable amount, and interest
function calculateEMI(P, R, N) {
    R = R / 12 / 100;
    N = N * 12;
    var EMI = P * R * Math.pow(1 + R, N) / (Math.pow(1 + R, N) - 1);
    return Math.round(EMI);
}
// Function to display the value of range inputs
function displayRangeValue(inputName, outputId) {
    const input = document.querySelector(`input[name="${inputName}"]`);
    const output = document.getElementById(outputId);
    const prefix = output.textContent.split(":")[0];
    output.textContent = `${prefix}: ₹${input.value}`;
}

// Call the function for each range input
document.querySelector('input[name="loanAmount"]').addEventListener('input', function() {
    displayRangeValue('loanAmount', 'loan-amount-value');
});

document.querySelector('input[name="loanDuration"]').addEventListener('input', function() {
    displayRangeValue('loanDuration', 'loan-period-value');
});

document.querySelector('input[name="interestRate"]').addEventListener('input', function() {
    displayRangeValue('interestRate', 'interest-rate-value');
});


// Add other JavaScript functionalities for the EMI calculator here


// Function to update loan details and charts
function updateLoanDetails() {
    var loanAmount = parseFloat(document.getElementsByName('loanAmount')[0].value);
    var interestRate = parseFloat(document.getElementsByName('interestRate')[0].value);
    var loanDuration = parseFloat(document.getElementsByName('loanDuration')[0].value);

    var monthlyEMI = calculateEMI(loanAmount, interestRate, loanDuration);
    var totalAmountPayable = monthlyEMI * loanDuration;
    var totalInterest = totalAmountPayable - loanAmount;

    // Display EMI, loan amount, interest, and total payable amount
    document.getElementById('emi').innerText = monthlyEMI.toLocaleString("en-IN", { style: "currency", currency: "INR" });
    document.getElementById('loanAmountDisplay').innerText = loanAmount.toLocaleString("en-IN", { style: "currency", currency: "INR" });
    document.getElementById('interestDisplay').innerText = totalInterest.toLocaleString("en-IN", { style: "currency", currency: "INR" });
    document.getElementById('finalAmountDisplay').innerText = totalAmountPayable.toLocaleString("en-IN", { style: "currency", currency: "INR" });

    // Update pie chart
    pie.data.datasets[0].data[0] = loanAmount;
    pie.data.datasets[0].data[1] = totalInterest;
    pie.update();

    // Update line chart
    var principalPaidData = [];
    var interestPaidData = [];
    var yearsPassed = [];
    var remainingLoanAmount = loanAmount;
    for (var i = 1; i <= loanDuration; i++) {
        var monthlyInterest = remainingLoanAmount * (interestRate / 12 / 100);
        var principalPaid = monthlyEMI - monthlyInterest;
        remainingLoanAmount -= principalPaid;
        principalPaidData.push(principalPaid);
        interestPaidData.push(monthlyInterest);
        yearsPassed.push(i);
    }

    line.data.datasets[0].data = principalPaidData;
    line.data.datasets[1].data = interestPaidData;
    line.data.labels = yearsPassed;
    line.update();
}

// Initialize Highcharts pie chart
var pie = new Chart(document.getElementById("pieChart"), {
    type: 'doughnut',
    data: {
        labels: ["Principal", "Interest"],
        datasets: [{
            label: 'Loan Breakdown',
            data: [0, 0],
            backgroundColor: [
                'rgba(54, 162, 235, 0.7)',
                'rgba(255, 99, 132, 0.7)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Loan Breakdown'
            }
        }
    }
});

// Initialize Highcharts line chart
var line = new Chart(document.getElementById("lineChart"), {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'Principal Paid',
            data: [],
            borderColor: 'rgba(54, 162, 235, 1)',
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            tension: 0.1
        }, {
            label: 'Interest Paid',
            data: [],
            borderColor: 'rgba(255, 99, 132, 1)',
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            tension: 0.1
        }]
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Payment Breakdown'
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Event listener for calculate button
document.getElementById('btnCalculate').addEventListener('click', function() {
    updateLoanDetails();
});

// Initial update
updateLoanDetails();



