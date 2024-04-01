<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UZHOST TOKEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    
    
    <style>
    
    .nav-link {
    transition: color 0.2s ease-in-out;
}

.nav-link:hover, .nav-link:focus {
    color: #00d1b2; /* Example hover color */
    text-decoration: none;
}

.nav-item.active .nav-link {
    color: #ffffff; /* Active link color */
    background-color: #007bff; /* Active link background color, adjust as per your theme */
    border-radius: .25rem;
}

    
.timeline {
    position: relative;
    padding: 0;
    list-style: none;
}

.timeline:before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 40px;
    width: 2px;
    margin-left: -1.5px;
    background-color: #e9ecef;
}

.timeline-item {
    position: relative;
    margin-bottom: 20px;
    padding-left: 60px;
}

.timeline-item:last-child {
    margin-bottom: 0;
}

.timeline-item h5 {
    margin-top: 0;
    color: #007bff;
}

.timeline-item p {
    margin-bottom: 0;
}

.timeline-icon {
    position: absolute;
    left: 0;
    top: 0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    background-color: #007bff;
    color: #ffffff;
}

/* Custom icons */
.timeline-icon.fa-circle {
    font-size: 24px;
}

.timeline {
    position: relative;
    padding: 0;
    list-style: none;
}

.timeline:before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 20px;
    width: 2px;
    margin-left: -1px;
    background-color: #007bff; /* Or any color that matches your theme */
}

.timeline-item {
    position: relative;
    margin-bottom: 40px;
    padding-left: 60px;
}

.timeline-item h5 {
    margin-top: 0;
    color: #333; /* Dark grey for better readability */
}

.timeline-item p {
    margin-bottom: 0;
}

.timeline-icon {
    position: absolute;
    top: 0;
    left: 0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-size: 20px; /* Adjusted icon size for balance */
    text-align: center;
    line-height: 40px;
    background-color: #007bff; /* Matching theme color */
    color: #ffffff;
}


.section-heading {
        color: #007bff; /* Bootstrap primary color */
        margin-bottom: 1rem;
    }

    .bg-light {
        background-color: #f8f9fa !important; /* Slightly lighter than default Bootstrap bg-light */
    }

    .icon-feature {
        max-width: 60px; /* Icon size in the features */
    }

    .team-member {
        margin-bottom: 1.5rem;
    }

    .team-photo {
        max-width: 100px;
        border-radius: 50%;
    }

    .card {
        transition: transform .2s; /* Animation for card hover */
    }

    .card:hover {
        transform: scale(1.05); /* Slightly scale up cards on hover */
    }

    .btn-primary {
        background-color: #007bff; /* Ensure consistent primary color */
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Darker on hover */
    }

.bg-info {
    background-color: #17a2b8 !important; /* Bootstrap info color for the section background */
}

.info-box {
    background: rgba(52, 58, 64, 0.8);
    background: linear-gradient(145deg, rgba(52, 58, 64, 0.9), rgba(33, 37, 41, 0.9));
    border: 1px solid rgba(255, 255, 255, 0.125);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.info-box h3 {
    color: #17a2b8; /* Lighter blue to stand out against the dark background */
    font-weight: 500; /* Medium font weight for heading */
}

.info-box p {
    font-size: 1.25rem; /* Larger font size for key figures */
    font-weight: bold;
    color: #fff; /* White color for better readability */
}

/* Responsive adjustments */
@media (max-width: 576px) {
    .info-box p {
        font-size: 1rem; /* Slightly smaller font size on very small screens */
    }
}




</style>

    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="fas fa-coins me-2"></i>UZHOST TOKEN
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="#roadmap"><i class="fas fa-route me-2"></i>Roadmap</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#whitepaper"><i class="fas fa-file-alt me-2"></i>Whitepaper</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#ico"><i class="fas fa-coins me-2"></i>ICO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#dex"><i class="fas fa-exchange-alt me-2"></i>DEX</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#team"><i class="fas fa-users me-2"></i>Team</a>
            </li>
            </ul>
            </div>

    </div>
</nav>


   <section id="roadmap" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Roadmap</h2>
        <div class="timeline">
            <div class="timeline-item">
                <span class="timeline-icon fa fa-exchange-alt"></span> <!-- Updated icon -->
                <h5>Quarter 1, 2024</h5>
                <p>Listing in DEX Dedust.io</p>
            </div>
            <div class="timeline-item">
                <span class="timeline-icon fa fa-handshake"></span> <!-- Updated icon -->
                <h5>Quarter 2, 2024</h5>
                <p>Listing in DEX Ston.Fi</p>
            </div>
            <div class="timeline-item">
                <span class="timeline-icon fa fa-link"></span> <!-- Updated icon -->
                <h5>Quarter 3, 2024</h5>
                <p>Bridge and Wrapped Token in Binance Smart Chain BEP-20</p>
            </div>
        </div>
    </div>
</section>




    <section id="whitepaper" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-heading">Whitepaper</h2>
        <p class="text-center">Discover the technology and philosophy behind UZHOST TOKEN. Our whitepaper provides a comprehensive overview of our project's vision, technology, and future roadmap.</p>
        <div class="text-center mt-4">
            <a href="assets/whitepaper.pdf" class="btn btn-primary" target="_blank">Download Whitepaper</a>
        </div>
    </div>
</section>


   <section id="ico" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-heading">ICO Information</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-coins fa-3x mb-3"></i>
                        <h5 class="card-title">Token Sale Start</h5>
                        <p class="card-text">Details about the start date, conditions, and how to participate.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-chart-pie fa-3x mb-3"></i>
                        <h5 class="card-title">Token Allocation</h5>
                        <p class="card-text">Information on token distribution, use of funds, and allocation percentages.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-hand-holding-usd fa-3x mb-3"></i>
                        <h5 class="card-title">How to Buy</h5>
                        <p class="card-text">Step-by-step guide on purchasing UZHOST TOKEN during the ICO.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-exchange-alt fa-3x mb-3"></i>
                        <h5 class="card-title">Dedust Exchange Swap</h5>
                        <p class="card-text">Easily swap tokens on Dedust.io post-ICO. Ensure seamless trading and liquidity.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



  <section id="dex" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-heading">DEX/CEX Listings</h2>
        <p class="text-center mb-4">UZHOST TOKEN is available on the following decentralized/centralized exchanges (DEX/CEXs):</p>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Exchange</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="assets/image/dedustlogo.png" alt="Dedust Logo" style="width: 50px; vertical-align: middle; margin-right: 10px;">
                            Dedust.io
                        </td>
                        <td>
                            <a href="https://dedust.io/swap/TON/0:a90b902ec2a184ed0aef880de3a174fbc90859b2e7bfcdaac1d87d66cc8a8687" target="_blank" class="btn btn-primary">Swap UZHOST TOKEN</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="assets/image/stonfilogo.jpg" alt="Ston.Fi Logo" style="width: 50px; vertical-align: middle; margin-right: 10px;">
                            Ston.Fi
                        </td>
                        <td>
                            <a href="https://app.ston.fi/swap?outputCurrency=EQCpC5AuwqGE7QrviA3joXT7yQhZsue_zarB2H1mzIqGh0Pa&chartVisible=false&ft=TON&tt=EQCpC5AuwqGE7QrviA3joXT7yQhZsue_zarB2H1mzIqGh0Pa" target="_blank" class="btn btn-primary">Swap UZHOST TOKEN</a>
                        </td>
                    </tr>
                    <!-- Add more DEX listings as needed -->
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="token-info" class="py-5 text-white">
    <div class="container text-center">
        <h2 class="section-heading mb-4" style="background-color: transparent;">Token Metrics</h2>
        <div class="row justify-content-center">
            
            <div class="col-md-4 mb-3"> <!-- Updated to col-md-4 for even distribution -->
                <div class="info-box bg-dark p-3 rounded">
                    <h3>Price</h3>
                    <p id="price">$0.0000015</p> <!-- Placeholder value -->
                </div>
            </div>
            
            <div class="col-md-4 mb-3"> <!-- Updated to col-md-4 for even distribution -->
                <div class="info-box bg-dark p-3 rounded">
                    <h3>24h Volume</h3>
                    <p id="volume">$00.01</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-3"> <!-- Updated to col-md-4 for even distribution -->
                <div class="info-box bg-dark p-3 rounded">
                    <h3>Liquidity</h3>
                    <p id="liquidity">$00.01</p>
                </div>
            </div>
            
            <!-- Introduced a new row for the next line of metrics for better control and alignment -->
            <div class="w-100"></div> <!-- Clears the previous row's floats to start a new line -->
            
            <div class="col-md-4 mb-3"> <!-- Repeat the column size for consistency -->
                <div class="info-box bg-dark p-3 rounded">
                    <h3>Supply</h3>
                    <p id="supply">0,000,000,000</p> <!-- Placeholder value -->
                </div>
            </div>
            
            <div class="col-md-4 mb-3"> <!-- Repeat the column size for consistency -->
                <div class="info-box bg-dark p-3 rounded">
                    <h3>Market Cap</h3>
                    <p id="marketcap">$00.01K</p>
                </div>
            </div>
            
        </div>
    </div>
</section>






    <section id="team" class="py-5">
    <div class="container">
        <h2 class="text-center section-heading">Our Team</h2>
        <div class="row text-center">
            <!-- Example Team Member -->
            <div class="col-lg-3 col-sm-6 team-member">
                <img src="assets/CEO-image.jpeg" class="team-photo mb-3" alt="Team Member Name">
                <h5>Shahzod Rahmon</h5>
                <p>Founder/CEO</p>
            </div>
            <!-- Add more team members as needed -->
             <div class="col-lg-3 col-sm-6 team-member">
                <img src="assets/CEO-image.jpeg" class="team-photo mb-3" alt="Team Member Name">
                <h5>Shohjahon</h5>
                <p>Co-Founder</p>
            </div>
             <div class="col-lg-3 col-sm-6 team-member">
                <img src="assets/CEO-image.jpeg" class="team-photo mb-3" alt="Team Member Name">
                <h5>Name</h5>
                <p>Role</p>
            </div>
             <div class="col-lg-3 col-sm-6 team-member">
                <img src="assets/CEO-image.jpeg" class="team-photo mb-3" alt="Team Member Name">
                <h5>Name</h5>
                <p>Role</p>
            </div>
        </div>
    </div>
</section>

 
    <footer class="text-center py-4 bg-primary text-white">
        © 2024 UZHOST TOKEN. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
   <script>
async function fetchTokenData() {
    const apiUrl = 'https://api.geckoterminal.com/api/v2/networks/ton/tokens/EQCpC5AuwqGE7QrviA3joXT7yQhZsue_zarB2H1mzIqGh0Pa';

    try {
        const response = await fetch(apiUrl);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const json = await response.json();
        const data = json.data.attributes; // Accessing the attributes object directly

        // Correctly access nested properties using the updated paths
        updateDOM('price', data.price_usd);
        updateDOM('supply', data.total_supply);
        updateDOM('volume', data.volume_usd.h24); // Correctly accessing the 24h volume
        updateDOM('liquidity', data.total_reserve_in_usd);
        // The API response does not contain a direct market_cap_usd, using fdv_usd as a fallback
        updateDOM('marketcap', data.fdv_usd); // Using fully diluted valuation in place of market cap if market cap is null
    } catch (error) {
        console.error('Fetching token data failed:', error);
        document.querySelectorAll('.info-box p').forEach(p => p.innerText = 'Data unavailable');
    }
}

function updateDOM(elementId, value) {
    const element = document.querySelector(`#${elementId}`);
    if (element && value !== undefined) { // Check for undefined to allow zero values
        let formattedValue;
        switch (elementId) {
            case 'price':
                // Assuming price needs to be detailed due to its potentially small value
                formattedValue = parseFloat(value).toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 8 });
                break;
            case 'volume':
                // Round 24h volume to 2 decimal places
                formattedValue = parseFloat(value).toFixed(2);
                break;
                
            case 'liquidity':
                // Double the liquidity value and round to 2 decimal places for display
                formattedValue = (parseFloat(value) * 2).toFixed(2);
                break;

            case 'supply':
                // Remove 9 decimals from the total supply and format
                formattedValue = (parseFloat(value) / Math.pow(10, 9)).toLocaleString(undefined, { maximumFractionDigits: 0 });
                break;
            case 'marketcap':
                // For market cap, display with 2 decimal accuracy or use fdv_usd formatting
                formattedValue = parseFloat(value).toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                break;
            default:
                formattedValue = parseFloat(value).toLocaleString();
        }
        element.innerText = `$${formattedValue}`;
    } else {
        console.warn(`Missing data or element for ${elementId}`);
    }
}


window.onload = fetchTokenData;
</script>




</body>
</html>
