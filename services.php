<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            include 'header-files.php';
            $comActive = 'active';
            $comShow = 'show';
            $type = $_GET['t'];

            switch ($type) {
                case 'com':
                    $comActive = 'active';
                    $comShow = 'show';
                break;
                case 'farm':
                    $farmActive = 'active';
                    $farmShow = 'show';
                    $comActive = '';
                    $comShow = '';
                break;
                case 'mini':
                    $miniActive = 'active';
                    $miniShow = 'show';
                    $comActive = '';
                    $comShow = '';
                break;
            }
        ?>
        <title>Services | <?= $websiteName ?></title>
        <style>
            img {
                border-radius: 10%; /* Make it circular */
                object-fit: cover; /* Optional: Ensures the image covers the entire circular area without distortion */
            }
        </style>
    </head>
    <body class="solar-energy-home">
        <?php include 'header.php' ?>
        <div class="our-service-area-start mt--40 mb--40 bg-lighten">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="solari-title-area-three text-center">
                            <span class="pre-title skew-up">Our Services</span>
                            <h4 class="title skew-up">We provide solar energy solutions designed to match the unique needs of homes, businesses, farms, and communities</h4>
                        </div>
                    </div>
                </div>
                <div class="row mt--40">
                    <div class="col-lg-12">
                        <div class="tab-area-service-solari-3">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link <?= $comActive ?>" id="com-tab" data-bs-toggle="tab" data-bs-target="#com" role="tab" aria-controls="com" aria-selected="false">
                                        <div class="icon">
                                            <svg width="56" height="40" viewBox="0 0 56 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M55.7435 20.2548L39.9936 4.60261C39.9621 4.5713 39.9384 4.55652 39.9122 4.54087C39.7617 4.42174 39.5762 4.34783 39.3749 4.34783H37.1122L39.9936 1.48435C40.2438 1.23565 40.3191 0.861739 40.1834 0.536521C40.0487 0.211304 39.7293 0 39.3749 0H16.6251C16.3923 0 16.1701 0.0913045 16.0064 0.254783L0.256539 15.907C0.00629055 16.1557 -0.068959 16.5296 0.0666652 16.8548C0.202289 17.18 0.521663 17.3913 0.87516 17.3913H3.1379L0.256539 20.2548C0.00629055 20.5035 -0.068959 20.8774 0.0666652 21.2026C0.202289 21.5278 0.521663 21.7391 0.87516 21.7391H2.62515V39.1304C2.62515 39.6113 3.01627 40 3.50014 40H52.4999C52.9837 40 53.3749 39.6113 53.3749 39.1304V21.7391H55.1248C55.4783 21.7391 55.7977 21.5278 55.9333 21.2026C56.069 20.8774 55.9937 20.5035 55.7435 20.2548ZM31.1377 7.82609H25.7373L31.8622 1.73913H37.2627L31.1377 7.82609ZM9.98736 15.6522L16.1123 9.56522H21.5128L15.3878 15.6522H9.98736ZM29.3877 1.73913L23.2628 7.82609H17.8623L23.9873 1.73913H29.3877ZM23.9873 9.56522H29.3877L23.2628 15.6522H17.8623L23.9873 9.56522ZM16.9873 1.73913H21.5128L15.3878 7.82609H10.8624L16.9873 1.73913ZM9.11236 9.56522H13.6378L7.51287 15.6522H2.9874L9.11236 9.56522ZM5.61238 17.3913H23.625C23.8578 17.3913 24.0791 17.2991 24.2436 17.1365L35.3622 6.08696H37.2627L23.2628 20H2.9874L5.61238 17.3913ZM4.37514 21.7391H25.375V38.2609H4.37514V21.7391ZM35.875 38.2609V26.087H42.8749V38.2609H35.875ZM52.4999 20C52.016 20 51.6249 20.3887 51.6249 20.8696V38.2609H44.6249V25.2174C44.6249 24.7365 44.2338 24.3478 43.7499 24.3478H35C34.5161 24.3478 34.125 24.7365 34.125 25.2174V38.2609H27.125V20.8696C27.125 20.3887 26.7339 20 26.25 20H25.7373L39.3749 6.44696L53.0126 20H52.4999Z" fill="#4AAB3D" />
                                                <path d="M39.3749 13.0435C36.9626 13.0435 35 14.9939 35 17.3913C35 19.7887 36.9626 21.7391 39.3749 21.7391C41.7873 21.7391 43.7499 19.7887 43.7499 17.3913C43.7499 14.9939 41.7873 13.0435 39.3749 13.0435ZM39.3749 20C37.9277 20 36.75 18.8296 36.75 17.3913C36.75 15.953 37.9277 14.7826 39.3749 14.7826C40.8222 14.7826 41.9999 15.953 41.9999 17.3913C41.9999 18.8304 40.8231 20 39.3749 20Z" fill="#4AAB3D" />
                                                <path d="M22.75 24.3478H7.00012C6.51625 24.3478 6.12513 24.7365 6.12513 25.2174V33.913C6.12513 34.3939 6.51625 34.7826 7.00012 34.7826H22.75C23.2339 34.7826 23.625 34.3939 23.625 33.913V25.2174C23.625 24.7374 23.2339 24.3478 22.75 24.3478ZM7.87512 26.087H14.0001V33.0435H7.87512V26.087ZM21.875 33.0435H15.7501V26.087H21.875V33.0435Z" fill="#4AAB3D" />
                                            </svg>
                                        </div>
                                        <p>Commercial & Residential</p>
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link <?= $farmActive ?>" id="farm-tab" data-bs-toggle="tab" data-bs-target="#farm" role="tab" aria-controls="farm" aria-selected="true">
                                        <div class="icon">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M30.7142 4.28601C27.9547 4.28601 25.7142 6.52648 25.7142 9.28599C25.7142 12.0455 27.9547 14.286 30.7142 14.286C33.4737 14.286 35.7141 12.0455 35.7141 9.28599C35.7141 6.52648 33.4737 4.28601 30.7142 4.28601ZM30.7142 5.71458C32.6851 5.71458 34.2856 7.31504 34.2856 9.28599C34.2856 11.2569 32.6851 12.8574 30.7142 12.8574C28.7432 12.8574 27.1428 11.2569 27.1428 9.28599C27.1428 7.31504 28.7432 5.71458 30.7142 5.71458Z" fill="#4AAB3D" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.4282 17.8573V16.4287C31.4282 16.0344 31.1082 15.7144 30.7139 15.7144C30.3197 15.7144 29.9997 16.0344 29.9997 16.4287V17.8573C29.9997 18.2516 30.3197 18.5715 30.7139 18.5715C31.1082 18.5715 31.4282 18.2516 31.4282 17.8573Z" fill="#4AAB3D" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M37.6476 15.2094L36.219 13.7809C35.9402 13.5023 35.4876 13.5023 35.2088 13.7809C34.9301 14.0594 34.9301 14.5123 35.2088 14.7909L36.6373 16.2194C36.9161 16.498 37.3688 16.498 37.6476 16.2194C37.9263 15.9409 37.9263 15.488 37.6476 15.2094Z" fill="#4AAB3D" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M39.2857 8.57161H37.8572C37.4629 8.57161 37.1429 8.8916 37.1429 9.28589C37.1429 9.68017 37.4629 10.0002 37.8572 10.0002H39.2857C39.6799 10.0002 40 9.68017 40 9.28589C40 8.8916 39.6799 8.57161 39.2857 8.57161Z" fill="#4AAB3D" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.6373 2.35236L35.2088 3.78092C34.9301 4.05949 34.9301 4.51234 35.2088 4.79091C35.4876 5.06948 35.9402 5.06948 36.219 4.79091L37.6476 3.36235C37.9263 3.08378 37.9263 2.63093 37.6476 2.35236C37.3688 2.07379 36.9161 2.07379 36.6373 2.35236Z" fill="#4AAB3D" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.2191 3.78092L24.7905 2.35236C24.5117 2.07379 24.0591 2.07379 23.7803 2.35236C23.5016 2.63093 23.5016 3.08378 23.7803 3.36235L25.2089 4.79091C25.4877 5.06948 25.9403 5.06948 26.2191 4.79091C26.4978 4.51234 26.4978 4.05949 26.2191 3.78092Z" fill="#4AAB3D" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M29.9997 0.714386V2.14292C29.9997 2.53722 30.3197 2.85731 30.7139 2.85731C31.1082 2.85731 31.4282 2.53722 31.4282 2.14292V0.714386C31.4282 0.320088 31.1082 0 30.7139 0C30.3197 0 29.9997 0.320088 29.9997 0.714386Z" fill="#4AAB3D" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.2089 13.7809L23.7803 15.2094C23.5016 15.488 23.5016 15.9409 23.7803 16.2194C24.0591 16.498 24.5117 16.498 24.7905 16.2194L26.2191 14.7909C26.4978 14.5123 26.4978 14.0594 26.2191 13.7809C25.9403 13.5023 25.4877 13.5023 25.2089 13.7809Z" fill="#4AAB3D" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.5716 8.57161H22.143C21.7488 8.57161 21.4287 8.8916 21.4287 9.28589C21.4287 9.68017 21.7488 10.0002 22.143 10.0002H23.5716C23.9658 10.0002 24.2858 9.68017 24.2858 9.28589C24.2858 8.8916 23.9658 8.57161 23.5716 8.57161Z" fill="#4AAB3D" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.94218 21.4287L0.0214778 13.7451C-0.0320932 13.5316 0.0157633 13.3051 0.151476 13.1323C0.286475 12.9587 0.494331 12.8573 0.714329 12.8573H22.1427C22.537 12.8573 22.857 13.1773 22.857 13.5716C22.857 13.9659 22.537 14.2859 22.1427 14.2859H16.6292L18.4149 21.4287H24.7998L24.1284 18.7451C24.0327 18.3623 24.2656 17.9744 24.6484 17.8787C25.0306 17.783 25.4191 18.0158 25.5148 18.398L26.272 21.4287H31.9419L31.8069 20.888C31.7112 20.5051 31.9441 20.1173 32.3262 20.0215C32.7091 19.9258 33.0969 20.1587 33.1926 20.5408L33.4148 21.4287H34.2855C34.6798 21.4287 34.9998 21.7487 34.9998 22.143C34.9998 22.5372 34.6798 22.8572 34.2855 22.8572H33.7719L35.6926 30.5408C35.7462 30.7543 35.6983 30.9808 35.5626 31.1536C35.4276 31.3272 35.2198 31.4286 34.9998 31.4286H20.7142V38.5714H39.2854C39.6797 38.5714 39.9997 38.8914 39.9997 39.2857C39.9997 39.68 39.6797 40 39.2854 40H0.714329C0.320047 40 4.92143e-05 39.68 4.92143e-05 39.2857C4.92143e-05 38.8914 0.320047 38.5714 0.714329 38.5714H14.9999V31.4286H5.00001C4.67215 31.4286 4.38644 31.2058 4.30716 30.8879L2.29932 22.8572H1.42861C1.03433 22.8572 0.714329 22.5372 0.714329 22.143C0.714329 21.7487 1.03433 21.4287 1.42861 21.4287H1.94218ZM16.4285 31.4286V38.5714H19.2856V31.4286H16.4285ZM11.2278 30.0001L9.44211 22.8572H3.77216L5.55786 30.0001H11.2278ZM10.915 22.8572L12.7007 30.0001H19.0849L17.2992 22.8572H10.915ZM18.772 22.8572L20.5577 30.0001H26.942L25.1563 22.8572H18.772ZM32.2991 22.8572H26.6291L28.4148 30.0001H34.0848L32.2991 22.8572ZM1.62932 14.2859L3.41502 21.4287H9.08569L7.29999 14.2859H1.62932ZM8.77212 14.2859L10.5578 21.4287H16.9428L15.1571 14.2859H8.77212Z" fill="#4AAB3D" />
                                            </svg>
                                        </div>
                                        <p>Farming & Agriculture</p>
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link <?= $miniActive ?>" id="mini-tab" data-bs-toggle="tab" data-bs-target="#mini" role="tab" aria-controls="mini" aria-selected="false">
                                        <div class="icon">
                                            <svg width="33" height="40" viewBox="0 0 33 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32.6481 30.2607C28.8625 24.7966 26.7425 22.411 23.0308 19.487C23.0523 19.3106 23.0648 19.1314 23.0648 18.9493C23.0648 17.9637 22.739 17.0539 22.191 16.323C23.9591 11.9147 24.6147 8.77775 25.1895 2.13242C25.2719 1.18264 24.6703 0.31419 23.7589 0.0673898C22.8475 -0.179411 21.8967 0.268721 21.4982 1.13272C18.7084 7.17726 17.7238 10.2252 17.0737 14.9348C16.0432 15.3764 15.2165 16.2118 14.7795 17.2532C10.1188 17.9101 7.10249 18.905 1.12116 21.7241C0.265923 22.1269 -0.177545 23.0876 0.066687 24.0087C0.304038 24.9038 1.19198 25.5353 2.11015 25.4544C8.59494 24.8816 11.7036 24.2294 15.9718 22.4983L14.9505 36.1946H14.4023C13.5922 36.1946 12.9331 36.8606 12.9331 37.6793V39.375C12.9331 39.7202 13.21 40 13.5516 40H23.4091C23.7506 40 24.0276 39.7202 24.0276 39.375V37.6793C24.0276 36.8606 23.3685 36.1946 22.5583 36.1946H22.0102L21.2222 25.6259C23.4122 28.0876 25.7708 30.0377 29.9457 32.9912C30.283 33.23 30.672 33.3469 31.0589 33.3469C31.5586 33.3469 32.0548 33.1517 32.4308 32.7718C33.098 32.0975 33.1893 31.0415 32.6481 30.2607ZM22.6194 1.66101C22.7661 1.34272 23.1031 1.18397 23.4388 1.27491C23.7744 1.36577 23.9876 1.67359 23.9573 2.02351C23.4159 8.28188 22.8052 11.3494 21.2299 15.3857C20.5283 14.886 19.6739 14.5913 18.7523 14.5913C18.6234 14.5913 18.4961 14.5981 18.3701 14.6094C19.0029 10.3189 19.9919 7.35374 22.6194 1.66101ZM18.7522 15.8413C20.4481 15.8413 21.8279 17.2355 21.8279 18.9493C21.8279 20.6631 20.4481 22.0573 18.7522 22.0573C17.0562 22.0573 15.6765 20.6631 15.6765 18.9493C15.6765 17.2355 17.0563 15.8413 18.7522 15.8413ZM2.00238 24.2091C1.65632 24.2399 1.35163 24.0243 1.26172 23.6852C1.17172 23.3459 1.3289 23.0055 1.64403 22.857C7.2773 20.2021 10.2116 19.2026 14.4574 18.563C14.4463 18.6904 14.4396 18.819 14.4396 18.9492C14.4396 19.8806 14.7311 20.7439 15.2256 21.4529C11.2313 23.0449 8.1957 23.662 2.00238 24.2091ZM22.7906 37.6793V38.75H14.1701V37.6793C14.1701 37.5521 14.2765 37.4446 14.4024 37.4446H22.5584C22.6843 37.4446 22.7906 37.5521 22.7906 37.6793ZM20.7697 36.1946H16.1911L17.1747 23.004C17.6636 23.199 18.1955 23.3073 18.7522 23.3073C18.9325 23.3073 19.1098 23.2948 19.2843 23.273C19.4785 23.5248 19.6705 23.7694 19.861 24.0077L20.7697 36.1946ZM31.5561 31.8878C31.3104 32.1362 30.9401 32.1689 30.6553 31.9673C25.5631 28.3648 23.2395 26.2967 20.5684 22.9006C21.4888 22.4669 22.2331 21.7147 22.6624 20.7846C26.023 23.4837 28.0697 25.8319 31.6349 30.9777C31.8343 31.2653 31.8019 31.6396 31.5561 31.8878ZM26.2926 8.80228C26.5112 8.53697 26.9011 8.50079 27.1636 8.72158C29.0701 10.3246 30.4869 12.4336 31.261 14.8207C32.0558 17.2714 32.1252 19.889 31.4618 22.3907C31.3595 22.7765 31.2363 23.1681 31.0957 23.5542C31.0037 23.807 30.767 23.9636 30.5151 23.9636C30.4443 23.9636 30.3721 23.9512 30.3017 23.925C29.9811 23.8059 29.8169 23.4466 29.9348 23.1226C30.0625 22.7718 30.1743 22.4167 30.2669 22.0672C31.4669 17.542 29.9382 12.6807 26.3723 9.68253C26.1099 9.46167 26.0741 9.0676 26.2926 8.80228ZM5.78376 16.7007C5.85311 16.2949 5.94009 15.8936 6.04245 15.5078C6.7058 13.0062 8.0611 10.7744 9.96199 9.05361C11.8135 7.37742 14.0841 6.26685 16.5283 5.84185C16.8651 5.78341 17.1847 6.01162 17.2427 6.35186C17.3006 6.69202 17.0747 7.01522 16.738 7.07382C12.1665 7.86875 8.43723 11.3063 7.23733 15.8314C7.14463 16.1808 7.06569 16.5448 7.00276 16.9134C6.9508 17.2176 6.68941 17.4322 6.39399 17.4322C6.35905 17.4322 6.32364 17.4291 6.288 17.423C5.95145 17.3642 5.72562 17.0408 5.78376 16.7007ZM13.0954 30.8862C13.0019 30.8862 12.9069 30.8647 12.8176 30.8192C11.2005 29.9956 9.79229 28.8614 8.63205 27.4483C8.41395 27.1827 8.45021 26.7886 8.71308 26.5682C8.97602 26.3477 9.36591 26.3845 9.58401 26.6501C10.6349 27.9301 11.9101 28.9573 13.3743 29.703C13.6794 29.8583 13.802 30.2342 13.6482 30.5424C13.5394 30.7603 13.3216 30.8862 13.0954 30.8862ZM16.0998 10.4234C16.2251 10.7446 16.069 11.1075 15.7512 11.234C13.6329 12.0777 11.9441 13.784 11.1177 15.9154C11.0222 16.1619 10.7888 16.3126 10.5417 16.3126C10.4666 16.3126 10.3903 16.2987 10.3162 16.2694C9.99818 16.1436 9.84131 15.7809 9.96594 15.4595C10.9172 13.0057 12.8605 11.0417 15.2975 10.071C15.6153 9.94448 15.9745 10.1022 16.0998 10.4234ZM25.2678 12.9059C25.5352 12.6909 25.9243 12.7359 26.1369 13.0061C27.7672 15.0781 28.4783 17.7608 28.088 20.3664C28.0416 20.676 27.7779 20.8979 27.4772 20.8979C27.4464 20.8979 27.4153 20.8956 27.3839 20.8908C27.0461 20.8392 26.8138 20.5206 26.865 20.1793C27.204 17.916 26.5858 15.585 25.1687 13.7841C24.956 13.5138 25.0005 13.1206 25.2678 12.9059Z" fill="#4AAB3D" />
                                            </svg>
                                        </div>
                                        <p>Mini Grids</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="tab-content tab-content-solari-service-m mt--60" id="myTabContent">
                                <div class="tab-pane fade <?= $comShow.' '.$comActive ?>" id="com" role="tabpanel" aria-labelledby="com-tab">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="thumbnail-area-left-image">
                                                <img src="imgs/services/commercial-and-residential.png" alt="service">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="inner-content-service-right-solari mt--10">
                                                <h3 class="title">Over 1 MW of PV capacity and 2 MWh of battery storage installed for commercial, industrial, & residential customers.</h3>
                                                <div class="service-singlew-main-wrapper-sm">
                                                    <div class="single-service">
                                                        <img src="assets/images/service/dt.png" alt="service">
                                                        <p>Campuses, hotels, factories, offices, health centres, & residences.</p>
                                                    </div>
                                                    <div class="single-service">
                                                        <img src="assets/images/service/dt.png" alt="service">
                                                        <p>Grid-tied or off-grid  depending on client needs.</p>
                                                    </div>
                                                    <div class="single-service">
                                                        <img src="assets/images/service/dt.png" alt="service">
                                                        <p>Installing across Somaliland & Puntland</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade <?= $farmShow.' '.$farmActive ?>" id="farm" role="tabpanel" aria-labelledby="farm-tab">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="thumbnail-area-left-image">
                                                <img src="imgs/services/farming-and-agriculture.png" alt="service">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="inner-content-service-right-solari mt--10">
                                                <h3 class="title">Over 200kW in solar water pumping for small farmers across the region.</h3>
                                                <div class="service-singlew-main-wrapper-sm">
                                                    <div class="single-service">
                                                        <img src="assets/images/service/dt.png" alt="service">
                                                        <p>Complete solar pumping system for over 30 farms.</p>
                                                    </div>
                                                    <div class="single-service">
                                                        <img src="assets/images/service/dt.png" alt="service">
                                                        <p>Substantial cost savings in diesel and improved irrigation.</p>
                                                    </div>
                                                    <div class="single-service">
                                                        <img src="assets/images/service/dt.png" alt="service">
                                                        <p>Agricultural advice for optimal crop management.</p>
                                                    </div>
                                                    <div class="single-service">
                                                        <img src="assets/images/service/dt.png" alt="service">
                                                        <p>On-going maintence to ensure uninterrupted water supply.</p>
                                                    </div>
                                                    <div class="single-service">
                                                        <img src="assets/images/service/dt.png" alt="service">
                                                        <p>Innovative financing options.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade <?= $miniShow.' '.$miniActive ?>" id="mini" role="tabpanel" aria-labelledby="mini-tab">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="thumbnail-area-left-image">
                                                <img src="assets/images/service/24.jpg" alt="service">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 pl--60 pl_sm--10 mt_sm--50">
                                            <div class="inner-content-service-right-solari mt--10">
                                                <h3 class="title">Wind Energy Services</h3>
                                                <p class="disc">
                                                    Our comprehensive solar energy services are designed to provide you with reliable, efficient, and sustainable solar solutions.
                                                </p>
                                                <p class="disc">
                                                    We offer customized solar energy solutions for homeowners, helping them harness the power of the sun to generate clean and renewable electricity for their homes.
                                                </p>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="thumbnail-img-sm-service">
                                                        <img src="assets/images/service/22.jpg" alt="service">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="service-singlew-main-wrapper-sm">
                                                        <!-- single start -->
                                                        <div class="single-service">
                                                            <img src="assets/images/service/dt.png" alt="service">
                                                            <p>Residential Solar Installation</p>
                                                        </div>
                                                        <!-- single end -->
                                                        <!-- single start -->
                                                        <div class="single-service">
                                                            <img src="assets/images/service/dt.png" alt="service">
                                                            <p>Residential Solar Installation</p>
                                                        </div>
                                                        <!-- single end -->
                                                        <!-- single start -->
                                                        <div class="single-service">
                                                            <img src="assets/images/service/dt.png" alt="service">
                                                            <p>Residential Solar Installation</p>
                                                        </div>
                                                        <!-- single end -->
                                                        <!-- single start -->
                                                        <div class="single-service">
                                                            <img src="assets/images/service/dt.png" alt="service">
                                                            <p>Residential Solar Installation</p>
                                                        </div>
                                                        <!-- single end -->
                                                    </div>
                                                </div>

                                                <a href="service-details.html" class="rts-btn btn-primary"> More Service</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="air-condition-swiper-wrapper mt--50">
                                    <div class="swiper mySwiper-h-2-c">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-case-ac">
                                                    <img style="height:300px" src="imgs/services/slider-1.jpg" alt="air-condition">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-case-ac">
                                                    <img style="height:300px" src="imgs/services/slider-2.jpg" alt="air-condition">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-case-ac">
                                                    <img style="height:300px" src="imgs/services/slider-3.png" alt="air-condition">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-case-ac">
                                                    <img style="height:300px" src="imgs/services/slider-4.png" alt="air-condition">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-case-ac">
                                                    <img style="height:300px" src="imgs/services/slider-5.png" alt="air-condition">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-case-ac">
                                                    <img style="height:300px" src="imgs/services/slider-6.png" alt="air-condition">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
    </body>
</html>