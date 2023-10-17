@extends('layouts.spacedcustomlayout')

@section('body')
    <!-- START Section Hero -->
    <section class="section-hero">
        <div class="banner position-relative">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12 text-lg-left text-center" data-wow-delay="0.2s">
                        <div class="banner-text">
                            <style>
                                .h1-font-size {
                                    font-size: 2em;
                                    /* This is the default font size for h1 */
                                }
                            </style>
                            <!--
        <table bgcolor="white" style="display: inline-table;">
          <tr>
            <td>
              <b class="c-white mb-3 mb-md-4">
                <font class="h1-font-size" size="5" color="red">One-of-a-Kind Investment Options Available to All</font>
              </b>
            </td>
          </tr>
        </table>
        -->


                            <b class="c-white mb-3 mb-md-4">

                                <font class="h1-font-size" size="5" style=" color: white;">One-of-a-Kind
                                    Investment Options Available to All</font>
                            </b>


                            <br>
                            <b style=" color: white;"> {{ $compd ? $compd->Companyname : 'Coming soon' }} has been driven
                                by a cohesive set of business principles since its inception. Our commingled investment
                                vehicles provide retail investors with access to exclusive Premium Holding
                                opportunities.</b>
                            <br>
                            <a href="{{route('register')}}" class="btn btn-lg btn-custom btn-light mt-4">Sign Up</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-none d-lg-block wow zoomIn" data-wow-delay="0.4s">
                        <div class="banner-img">
                            <img src="{{ asset('ldxa-trade.com/img/home/index.html') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- END Section Hero -->
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span
                    class="blue-text"></span></a></div>

        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [{
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500"
                    },
                    {
                        "proName": "FOREXCOM:NSXUSD",
                        "title": "Nasdaq 100"
                    },
                    {
                        "proName": "FX_IDC:EURUSD",
                        "title": "EUR/USD"
                    },
                    {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "BTC/USD"
                    },
                    {
                        "proName": ":ETHUSD",
                        "title": "ETH/USD"
                    }
                ],
                "showSymbolLogo": true,
                "colorTheme": "light",
                "isTransparent": false,
                "displayMode": "adaptive",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->
    <!-- START Section About -->
    <section class="about-section bg-white">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-last text-center text-lg-left">
                    <div class="title-left">
                        <h3 class="top-sep">Why choose us</h3>
                    </div>
                    <p>Our primary focus is on achieving excellence in investing. This entails generating attractive
                        returns while minimizing risk, which is only feasible in markets that are not "efficient." </p>
                    <p>Consistency, capital protection, and outstanding performance during difficult times are our top
                        priorities, even as we strive for superior returns. </p>

                    <p>We believe that adding value in our markets necessitates a "knowledge advantage" acquired through
                        extensive proprietary research. As a result, we have created a research methodology that is
                        consistently applied, with each market having a dedicated team of highly skilled specialists.
                    </p>

                    <p>Our objective is to achieve exceptional investment results by generating attractive returns while
                        keeping risk to a minimum. To achieve this goal, we concentrate on markets that lack
                        "efficiency." Although we aim for superior returns, our primary focus is on producing consistent
                        results that protect capital and deliver exceptional performance during difficult times. </p>




                    <a href="{{route('about')}}" class="btn btn-custom mt-4">Read more</a>
                </div>
                <div class="col-lg-6 d-none d-lg-block order-lg-first">
                    <img src="{{ asset('ldxa-trade.com/img/pages/about-img2.png') }}" class="img-fluid pr-lg-4"
                        alt="Business">
                </div>
            </div>
        </div>
    </section>
    <!-- END Section About -->




    {{-- <section class="about-section bg-white">

        <div class="container">


            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-last text-center text-lg-left">
                    <div class="title-left">
                        <h3 class="top-sep">Recent Transactions</h3>
                    </div>


                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f0f2f5;
                            color: #333;
                        }

                        #transactionTable {
                            width: 100%;
                            max-width: 1000px;
                            margin: 50px auto;
                            border-collapse: collapse;
                        }

                        #transactionTable th,
                        #transactionTable td {
                            padding: 15px;
                            border: 1px solid #dce0e5;
                            text-align: left;
                            font-weight: bold;
                            /* Make all text bold */
                        }

                        #transactionTable th {
                            background-color: #b03060;
                            /* Red rose color */
                            color: #FFF;
                        }

                        #transactionTable tr:nth-child(even) {
                            background-color: #ffe5ea;
                            /* Light red rose color */
                        }

                        #transactionTable tr:hover {
                            background-color: #ffd1db;
                            cursor: pointer;
                        }

                        /* Mobile Styles */
                        @media only screen and (max-width: 600px) {
                            #transactionTable {
                                margin: 30px auto;
                            }

                            #transactionTable th,
                            #transactionTable td {
                                padding: 10px;
                                font-size: 12px;
                            }
                        }

                        /* Tablet Styles */
                        @media only screen and (min-width: 601px) and (max-width: 1024px) {
                            #transactionTable {
                                margin: 40px auto;
                            }

                            #transactionTable th,
                            #transactionTable td {
                                padding: 12px;
                                font-size: 14px;
                            }
                        }
                    </style>
                    <script>
                        async function fetchData() {
                            const response = await fetch("hash.php");
                            const data = await response.json();

                            let output = `<tr>
            <th>Transaction Details</th>
        </tr>`;

                            data.forEach(transaction => {
                                output += `<tr>
                <td>
                    <div>Name: ${transaction.random_name}</div>
                    <div>Hash: ${transaction.hash}</div>
                    <div>Amount (USD): $${transaction.amount_usd.toFixed(10)}</div>
                </td>
            </tr>`;
                            });

                            document.getElementById("transactionTable").innerHTML = output;
                        }

                        window.onload = fetchData;
                    </script>
                    <table id="transactionTable"></table>

                </div>
            </div>

        </div>

        </div>
    </section> --}}


    <!-- START Section Services -->
    <section class="service-section overlay-bg bg-light sp-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title title-left text-center text-lg-left">
                        <h3 class="top-sep">Business Principles</h3>
                        <p>Our community is directed by our commercial tenets, and our tactics function in accordance
                            with our cohesive investment ideology.



                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-12 mb-30">
                    <div class="service-box">
                        <div class="icon-box">
                            <i class="flaticon-consultation"></i>
                        </div>
                        <h5 class="btm-sep">Market Research</h5>
                        <p> Our inquiry centers on listing the constituents necessary for achieving prosperity and
                            detecting potential investments that fulfill those prerequisites. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-30">
                    <div class="service-box">
                        <div class="icon-box">
                            <i class="flaticon-search-engine"></i>
                        </div>
                        <h5 class="btm-sep">Excellence</h5>
                        <p>Our objective entails achieving superior outcomes in the realm of investment. Specifically,
                            we aim to secure favorable returns while limiting risk exposure.



                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-30">
                    <div class="service-box">
                        <div class="icon-box">
                            <i class="flaticon-computer"></i>
                        </div>
                        <h5 class="btm-sep">Ethical Personnel</h5>
                        <p>It is essential to maintain a workplace where cooperation is promoted and harmony prevails.
                            To achieve this, it is necessary to avoid personnel leaving the organization frequently,
                            prevent political maneuvering within the office, and discourage unhealthy competition among
                            colleagues.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-30">
                    <div class="service-box">
                        <div class="icon-box">
                            <i class="flaticon-seo"></i>
                        </div>
                        <h5 class="btm-sep">Common Interests</h5>
                        <p>In order to establish mutual interests with our customers, we place significant emphasis on
                            identifying potential conflicts of interests, and if feasible, prevent them from occurring.
                            When avoidance is not an option, we handle these situations in an equitable manner.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-30">
                    <div class="service-box">
                        <div class="icon-box">
                            <i class="flaticon-management"></i>
                        </div>
                        <h5 class="btm-sep">Client Communication</h5>
                        <p>Our correspondence with customers should cater to their requirements and reinforce our
                            associations with them. It is our objective that each customer comprehends our ideology,
                            methodology, undertakings, and outcomes.



                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-30">
                    <div class="service-box">
                        <div class="icon-box">
                            <i class="flaticon-deal"></i>
                        </div>
                        <h5 class="btm-sep">Profitability</h5>
                        <p>The financial gain of our enterprise must arise from executing the aforementioned actions.
                            Premium Holding is administered with the objective of serving its patrons and their
                            respective groups, in addition to benefiting its proprietors and staff.



                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section Services -->

    <!-- START Section Projects -->
    <section class="project-section bg-w sp-100-70">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title title-left text-center text-lg-left">
                        <h3 class="top-sep">Key Market Stakes</h3>

                    </div>
                </div>
            </div>
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener"
                        target="_blank"><span class="blue-text"></span></a></div>

                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                    {
                        "width": "100%",
                        "height": "500",
                        "symbolsGroups": [{
                                "name": "Indices",
                                "originalName": "Indices",
                                "symbols": [{
                                        "name": "FOREXCOM:SPXUSD",
                                        "displayName": "S&P 500"
                                    },
                                    {
                                        "name": "FOREXCOM:NSXUSD",
                                        "displayName": "Nasdaq 100"
                                    },
                                    {
                                        "name": "FOREXCOM:DJI",
                                        "displayName": "Dow 30"
                                    },
                                    {
                                        "name": "INDEX:NKY",
                                        "displayName": "Nikkei 225"
                                    },
                                    {
                                        "name": "INDEX:DEU30",
                                        "displayName": "DAX Index"
                                    },
                                    {
                                        "name": "FOREXCOM:UKXGBP",
                                        "displayName": "FTSE 100"
                                    }
                                ]
                            },
                            {
                                "name": "Commodities",
                                "originalName": "Commodities",
                                "symbols": [{
                                        "name": "CME_MINI:ES1!",
                                        "displayName": "S&P 500"
                                    },
                                    {
                                        "name": "CME:6E1!",
                                        "displayName": "Euro"
                                    },
                                    {
                                        "name": "COMEX:GC1!",
                                        "displayName": "Gold"
                                    },
                                    {
                                        "name": "NYMEX:CL1!",
                                        "displayName": "Crude Oil"
                                    },
                                    {
                                        "name": "NYMEX:NG1!",
                                        "displayName": "Natural Gas"
                                    },
                                    {
                                        "name": "CBOT:ZC1!",
                                        "displayName": "Corn"
                                    }
                                ]
                            },
                            {
                                "name": "Bonds",
                                "originalName": "Bonds",
                                "symbols": [{
                                        "name": "CME:GE1!",
                                        "displayName": "Eurodollar"
                                    },
                                    {
                                        "name": "CBOT:ZB1!",
                                        "displayName": "T-Bond"
                                    },
                                    {
                                        "name": "CBOT:UB1!",
                                        "displayName": "Ultra T-Bond"
                                    },
                                    {
                                        "name": "EUREX:FGBL1!",
                                        "displayName": "Euro Bund"
                                    },
                                    {
                                        "name": "EUREX:FBTP1!",
                                        "displayName": "Euro BTP"
                                    },
                                    {
                                        "name": "EUREX:FGBM1!",
                                        "displayName": "Euro BOBL"
                                    }
                                ]
                            },
                            {
                                "name": "Forex",
                                "originalName": "Forex",
                                "symbols": [{
                                        "name": "FX:EURUSD"
                                    },
                                    {
                                        "name": "FX:GBPUSD"
                                    },
                                    {
                                        "name": "FX:USDJPY"
                                    },
                                    {
                                        "name": "FX:USDCHF"
                                    },
                                    {
                                        "name": "FX:AUDUSD"
                                    },
                                    {
                                        "name": "FX:USDCAD"
                                    }
                                ]
                            }
                        ],
                        "colorTheme": "light",
                        "isTransparent": false,
                        "locale": "en"
                    }
                </script>

            </div>
            <!-- TradingView Widget END -->
        </div>

    </section>
    <!-- END Section Projects -->






    <!-- START Section Plan -->
    <section class="bg-light sp-100-70">
        <div class="container">

            <div class="tab-content wow fadeIn">
                <div role="tabpanel" class="tab-pane fade show active" id="yearly">
                    <div class="row justify-content-center">
                        {{-- <div class="col-md-6 col-lg-4 mb-30">
                            <div class="price-item text-center popular">
                                <div class="price-top">
                                    <h4 class="mb-0">Bronze Plan</h4>


                                </div>
                                <div class="price-content">
                                    <ul class="border-bottom mb-30 mt-md-4 pb-3 text-left">
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Plan Return - 2% Daily</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Plan Duration - 5 Days</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Minimum Capital - $50</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Maximum Capital - $4,999</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Referral Commission - 10%</span>
                                        </li>


                                    </ul>
                                    <a href="{{route('register')}}" class="btn btn-custom">Invest Now</a>
                                </div>
                            </div>
                        </div> --}}
                        @if ($investmentplans)
                            @foreach ($investmentplans as $price)
                                <div class="col-md-6 col-lg-4 mb-30">
                                    <div class="price-item text-center">
                                        <div class="price-top">

                                            <h4 class="mb-0">{{ $price->name }}</h4>

                                        </div>
                                        <div class="price-content">
                                            <ul class="border-bottom mb-30 mt-md-4 pb-3 text-left">
                                                <li>
                                                    <i class="zmdi zmdi-check mr-2"></i>
                                                    <span class="c-black">Plan Return - {{$price->percentage }}% Daily</span>
                                                </li>
                                                <li>
                                                    <i class="zmdi zmdi-check mr-2"></i>
                                                    <span class="c-black">Plan Duration - {{ $price->noofrepeat }} Days</span>
                                                </li>
                                                <li>
                                                    <i class="zmdi zmdi-check mr-2"></i>
                                                    <span class="c-black">Minimum Capital - ${{ $price->minimum }}</span>
                                                </li>
                                                <li>
                                                    <i class="zmdi zmdi-check mr-2"></i>
                                                    <span class="c-black">Maximum Capital - ${{ $price->maximum }}</span>
                                                </li>
                                                <li>
                                                    <i class="zmdi zmdi-check mr-2"></i>
                                                    <span class="c-black">Referral Commission - {{ $price->refpercent}}%</span>
                                                </li>


                                            </ul>
                                            <a href="{{route('register')}}" class="btn btn-custom">Invest Now</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        {{-- <div class="col-md-6 col-lg-4 mb-30">
                            <div class="price-item text-center popular">
                                <div class="price-top">

                                    <h4 class="mb-0">Gold Plan</h4>

                                </div>
                                <div class="price-content">
                                    <ul class="border-bottom mb-30 mt-md-4 pb-3 text-left">
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Plan Return - 5% Daily</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Plan Duration - 5 Days</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Minimum Capital - $20,000</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Maximum Capital - Unlimited</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Referral Commission - 10%</span>
                                        </li>


                                    </ul>
                                    <a href="{{route('register')}}" class="btn btn-custom">Invest Now</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>


            </div>
        </div>
        </div>
    </section>


    <section class="info-section">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>{{ $compd ? $compd->companyname : 'company name' }}</h5>
                <h2>Our Happy Clients</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-4 col-4 title-column">

                    <video id="vid" controls autoplay style="width: inherit;">
                        <source src="cert/1.mp4" type="video/mp4">
                    </video>
                    <script>
                        document.getElementById('vid').play();
                    </script>




                </div>
                <div class="col-lg-4 col-md-6 col-sm-4  col-4 title-column">

                    <video controls style="width: inherit;">
                        <source src="cert/2.mp4" type="video/mp4">
                    </video>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-4 col-4 title-column">

                    <video controls style="width: inherit;">
                        <source src="cert/3.mp4" type="video/mp4">
                    </video>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-4 col-4 title-column">

                    <video controls style="width: inherit;">
                        <source src="cert/4.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-4 col-4 title-column">

                    <video controls style="width: inherit;">
                        <source src="cert/5.mp4" type="video/mp4">
                    </video>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-4 col-4 title-column">

                    <video controls style="width: inherit;">
                        <source src="cert/6.mp4" type="video/mp4">
                    </video>

                </div>
            </div>
        </div>
    </section><!-- Section Blog -->
    <!-- END Section Plan -->
    {{-- <section class="project-section bg-w sp-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title title-left text-center text-lg-left">
                        <h3 class="top-sep">Cryptocurrency Market Data</h3>

                    </div>
                </div>
            </div>
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a
                        href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener"
                        target="_blank"><span class="blue-text"></span></a></div>

                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                    {
                        "width": "100%",
                        "height": "500",
                        "defaultColumn": "overview",
                        "screener_type": "crypto_mkt",
                        "displayCurrency": "USD",
                        "colorTheme": "light",
                        "locale": "en"
                    }
                </script>

            </div>
            <!-- TradingView Widget END -->
        </div>

    </section> --}}
    <!-- END Section Projects -->
    <!-- START Section CTA -->
    <section class="cta-section position-relative">
        <div class="container">
            <div class="cta-box bg-white wow fadeInUp" data-wow-delay="0.2s">
                <h3>Start growing with {{ $compd ? $compd->Companyname : 'Coming soon' }} today!</h3>
                <p class="mb-30 mx-auto">As a company, we frequently assess how we can integrate ESG considerations into
                    our investment strategy to responsibly invest on behalf of our customers. We strive to be mindful of
                    the environmental, social, and governance factors that may impact our investments, and we are
                    committed to finding ways to include these considerations in our decision-making process. Our goal
                    is to invest in a manner that aligns with our values and our clients' interests, while also
                    contributing to sustainable and equitable outcomes for society and the environment. We believe that
                    incorporating ESG factors into our investment approach is not only ethical, but also prudent from a
                    long-term investment perspective. As such, we are dedicated to continuing our efforts to enhance our
                    ESG integration practices and stay informed of emerging trends and best practices in the field. We
                    are committed to fostering a culture of responsible investing, and we recognize that this is an
                    ongoing process that requires continuous improvement and evolution.





                </p>
                <a href="{{route('login')}}" class="btn btn-lg btn-custom">Access Your Account <i
                        class="zmdi zmdi-long-arrow-right ml-2"></i></a>
            </div>
        </div>
    </section>
    <!-- END Section CTA -->
@endsection
