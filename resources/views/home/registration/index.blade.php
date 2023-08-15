@include('home.layout.header')
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="{{ asset('home/css/register_request.css')}}">

    <div class="box-title">
        <center><h1>Online Application<br>Registration</h1></center>
    </div>
    <!-- Expandable rectangles section -->
    <div class="container">
        <div class="box">
            <div class="title">
                <img src="{{ asset('home/image/birth.png') }}" alt="Logo 1">
                <span>Birth</span>
                <i class='bx bx-chevrons-down'></i>
            </div>
            <div class="content">
                This is the paragraph for box 1. It will be shown when the arrow button is clicked and the box is expanded.
            </div>
            <div class="expand-button">
                <img src="{{ asset('home/image/Birth-Button-Registration.png') }}" alt="Birth Request">
            </div>
        </div>
        <div class="box">
            <div class="title">
                <img src="{{ asset('home/image/marriage.png') }}" alt="Logo 2">
                <span>Marriage</span>
                <i class='bx bx-chevrons-down'></i>
            </div>
            <div class="content">
                This is the paragraph for box 2. It will be shown when the arrow button is clicked and the box is expanded.
            </div>
            <div class="expand-button">
                <img src="{{ asset('home/image/Marriage-Button-Registration.png') }}" alt="Marriage Request">
            </div>
        </div>
        <div class="box">
            <div class="title">
                <img src="{{ asset('home/image/death.png') }}" alt="Logo 3">
                <span>Death</span>
                <i class='bx bx-chevrons-down'></i>
            </div>
            <div class="content">
                This is the paragraph for box 3. It will be shown when the arrow button is clicked and the box is expanded.
            </div>
            <div class="expand-button">
                <img src="{{ asset('home/image/Death-Button-Registration.png') }}" alt="Death Request">
            </div>
        </div>
    </div>

    <div class="popup-overlay" id="popupOverlay">
        <div class="popup-container">
            <span class="popup-close"><i class="bx bx-x"></i></span>
            <div class="popup-title-container">
                <div class="popup-title"><center>Terms & Conditions</center></div>
            </div>
            <div class="popup-content">
                <!-- Add your terms and conditions content here -->
                <img src="{{ asset('home/image/TermsAndConditions.png') }}" alt="Terms & Conditions Image" class="popup-image">
                <p align="justify"> <b>Acceptance of Terms</b><br>
                    By accessing or using the Website, you agree to be bound by these Terms. If you do not agree with any part of these Terms, you must not use the Website.
                    <br>
                    <br>
                    <b>Intellectual Property</b><br>
                    All content, trademarks, logos, and intellectual property displayed on the Website are the property of Your Company Name or its licensors. You may not use, reproduce, modify, or distribute any content from the Website without prior written permission from us.
                    <br>
                    <br>
                    <b>User Conduct</b><br>
                    You agree to use the Website only for lawful purposes and in a manner that does not infringe on the rights of others. You are prohibited from engaging in any activity that may disrupt or interfere with the proper functioning of the Website.
                    <br>
                    <br>
                    <b>Privacy Policy</b><br>
                    Your privacy is important to us. Please review our Privacy Policy link to Privacy Policy to understand how we collect, use, and disclose your personal information.
                    <br>
                    <br>
                    <b>Disclaimer of Warranties</b><br>
                    The Website is provided on an "as is" and "as available" basis without any warranties, expressed or implied. We do not guarantee that the Website will be free from errors, viruses, or interruptions.
                    <br>
                    <br>
                    <b>Limitation of Liability</b><br>
                    In no event shall Your Company Name be liable for any indirect, consequential, incidental, special, or punitive damages arising out of or in connection with the use or inability to use the Website.
                    <br>
                    <br>
                    <b>External Links</b><br>
                    The Website may contain links to third-party websites. These links are provided for your convenience, and we do not endorse or have control over the content or practices of these websites. We are not responsible for any damages or losses resulting from your use of external links.
                    <br>
                    <br>
                    <b>Indemnification</b><br>
                    You agree to indemnify and hold Your Company Name harmless from any claims, losses, damages, liabilities, costs, and expenses, including legal fees, arising out of your use of the Website or any violation of these Terms.
                    <br>
                    <br>
                    <b>Changes to the Terms</b><br>
                    We reserve the right to modify these Terms at any time without prior notice. It is your responsibility to review these Terms regularly. Your continued use of the Website after any changes constitute your acceptance of the revised Terms.
                    <br>
                    <br>
                    <b>Governing Law and Jurisdiction</b><br>
                    These Terms shall be governed by and construed in accordance with the laws of Your Country/State. Any dispute arising under or in connection with these Terms shall be subject to the exclusive jurisdiction of the courts in Your Country/State.</p>
            </div>
            <div class="popup-title-container">
                <div class="popup-title"><center>Data Privacy</center></div>
            </div>
            <div class="popup-content">
                <!-- Add your data privacy content here -->
                <img src="{{ asset('home/image/DataPrivacy.png') }}" alt="Data Privacy Image" class="popup-image">
                <p align="justify"><b>Republic Act No. 10173</b>, also known as the "Data Privacy Act of 2012," is a Philippine law that aims to protect the fundamental right of individuals to privacy while ensuring the free flow of information for the country's development. The law provides guidelines and regulations for the processing of personal data in both the government and private sectors. Here are some key points and provisions of the Data Privacy Act of 2012:
                    <br>
                    <br>
                    <br>
                    <b>Scope and Application:</b><br>
                    The law applies to the processing of personal data, whether automated or manual, by entities that are involved in the collection, recording, organization, storage, updating, retrieval, use, consolidation, blocking, erasure, or destruction of personal data.
                    <br>
                    <b>Personal Data Privacy Principles:</b><br>
                    The Data Privacy Act lays down the following data privacy principles that data controllers and processors must adhere to:<br>
                <b>A.</b> Transparency: Data subjects must be informed about the purpose, extent, and method of data processing.<br>
                <b>B.</b> Legitimate Purpose: Data must be processed only for legitimate and specified purposes with the consent of the data subject.<br>
                <b>  C.</b> Proportionality: Data processing must be relevant and limited to what is necessary for the declared purpose.<br>
                <b>  D.</b> Data Quality: Personal data must be accurate, complete, and kept up-to-date.<br>
                <b> E. </b>Data Retention: Personal data should not be retained longer than necessary.<br>
                <b> F. </b>Security Safeguards: Measures must be implemented to protect personal data against unauthorized access, processing, or disclosure.<br>
                <b>  G.</b> Data Subject Participation: Data subjects have the right to access, correct, and object to the processing of their personal data.<br>
                    <br>
                    <b>Consent of the Data Subject:</b><br>
                    The Data Privacy Act requires that the data subject must give express consent before the processing of their personal data, except in certain circumstances where processing is allowed by law.
                    <br><br>
                    <b>Sensitive Personal Information and Privileged Information:</b><br>
                    The law provides additional protection for sensitive personal information, such as race, ethnicity, health, religious beliefs, and political affiliations. Processing sensitive personal information generally requires the data subject's explicit consent.
                    <br><br>
                    <b>Data Breach Notification:</b><br>
                    In the event of a data breach involving personal data that is likely to result in harm to the data subject, the data controller or processor must notify the National Privacy Commission (NPC) and affected individuals.
                    <br><br>
                    <b>National Privacy Commission (NPC):</b><br>
                    The NPC is the governing body responsible for enforcing and implementing the provisions of the Data Privacy Act. It has the authority to investigate data privacy violations, issue guidelines, and impose fines or penalties for non-compliance.
                    <br><br>
                    <b>Cross-Border Data Transfers:</b><br>
                    The law regulates the transfer of personal data outside the Philippines to ensure that the data is adequately protected even when sent to foreign jurisdictions.</p>
            </div>
            <div class="popup-buttons">
                <label for="termsCheck">
                    <input type="checkbox" id="termsCheck" required>
                    I Agree to the <b><u>Terms & Conditions</u></b> / <b><u>Data Privacy</u></b> of <b>REGISTRIO</b>
                </label>
                <button id="btnDecline">Decline</button>
                <button id="btnAccept" disabled>Accept</button>
            </div>
        </div>
    </div>

    <div class="popup-overlay" id="questionPopupOverlay">
        <div class="popup-container">
            <span class="popup-close"><i class="bx bx-x"></i></span>
            <div class="popup-title-container">
                <div class="popup-title"><center><b>Please Answer the Questions</b></center></div>
            </div>
            <div class="popup-content">
                <p>Question 1: Have you been registered as a citizen in your country?</p>
                <label for="question1Yes">Yes
                    <input type="radio" id="question1Yes" name="question1" value="Yes">
                </label>
                <label for="question1No">No
                    <input type="radio" id="question1No" name="question1" value="No">
                </label>
                <p>Question 2: Are you above the age of 18?</p>
                <label for="question2Yes">Yes
                    <input type="radio" id="question2Yes" name="question2" value="Yes">
                </label>
                <label for="question2No">No
                    <input type="radio" id="question2No" name="question2" value="No">
                </label>
            </div>
            <div class="popup-buttons">
                <button id="btnCancel">Cancel</button>
                <a href="{{ route('login') }}"><button id="btnNext">Next</button></a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        const boxes = document.querySelectorAll('.box');

        boxes.forEach((box) => {
            const title = box.querySelector('.title');

            title.addEventListener('click', () => {
                box.classList.toggle('expanded');

                // Change image size on box expand/collapse
                const img = box.querySelector('img');
                if (box.classList.contains('expanded')) {
                    img.style.width = '200px';
                    img.style.height = '250px';
                } else {
                    img.style.width = '45px';
                    img.style.height = '70px';
                }
            });
        });
    </script>

<!-- ... Existing code ... -->

<script>
    $(document).ready(function () {
        // Show popup when expand-button is clicked
        $('.expand-button').on('click', function () {
            // Check if the user already accepted the Terms and Conditions
            if ($('#termsCheck').prop('checked')) {
                const boxIndex = $(this).closest('.box').index();
                if (boxIndex === 0) {
                    showBirthQuestions();
                } else if (boxIndex === 1) {
                    showMarriageQuestions();
                } else if (boxIndex === 2) {
                    showDeathQuestions();
                }
            } else {
                // If the user didn't accept the Terms and Conditions, show the Terms and Conditions popup first
                $('#popupOverlay').fadeIn();
            }
        });

        // Close the popup when the close icon or Decline button is clicked
        $('.popup-close, #btnDecline').on('click', function () {
            $('#popupOverlay').fadeOut();
        });

        // Handle Accept button click
        $('#btnAccept').on('click', function () {
            // Perform actions here after the user accepts the terms and conditions
            $('#popupOverlay').fadeOut();
        });

        // Handle checkbox change event
        $('#termsCheck').on('change', function () {
            $('#btnAccept').prop('disabled', !this.checked);
        });

        // Function to show the Birth questions popup
        function showBirthQuestions() {
            // Show the Birth questions popup
            $('#questionPopupOverlay').fadeIn();
        }

        // Function to hide the Birth questions popup
        function hideBirthQuestions() {
            // Hide the Birth questions popup
            $('#questionPopupOverlay').fadeOut();
        }

    // Handle Next button click for Birth questions
    $('#btnNext').on('click', function () {
        // Get the selected answers from the radio buttons
        const question1Answer = $("input[name='question1']:checked").val();
        const question2Answer = $("input[name='question2']:checked").val();

        // Do something with the answers (you can replace this with your desired action)
        if (question1Answer === 'Yes' && question2Answer === 'Yes') {
            // User answered both questions with "Yes"
            //alert("Congratulations! You are eligible to proceed.");
            // You can redirect to the "Birth" page here
            window.location.href = "{{ route('login') }}";
        } else {
            // User answered at least one question with "No"
            alert("Sorry, you are not eligible to proceed.");
        }

        // Hide the Birth questions popup
        hideQuestions();
    });

        // Handle Cancel button click for Birth questions
        $('#btnCancel').on('click', function () {
            // Hide the Birth questions popup
            hideBirthQuestions();

            // If needed, show the Terms and Conditions popup again
            $('#popupOverlay').fadeIn();
        });

        // Function to show the Marriage questions popup
        function showMarriageQuestions() {
            // Show the Marriage questions popup
            $('#questionPopupOverlay').fadeIn();
        }

        // Function to handle the click on the Marriage section's expand-button
        $('.box').eq(1).find('.expand-button').on('click', function () {
            // Check if the user already accepted the Terms and Conditions
            if ($('#termsCheck').prop('checked')) {
                // Show the Marriage questions popup
                showMarriageQuestions();
            } else {
                // If the user didn't accept the Terms and Conditions, show the Terms and Conditions popup first
                $('#popupOverlay').fadeIn();
            }
        });

        // Handle Next button click for Marriage questions
        $('#btnNext').on('click', function () {
            // Get the selected answers from the radio buttons
            const question1Answer = $("input[name='question1']:checked").val();
            const question2Answer = $("input[name='question2']:checked").val();

            // Do something with the answers (you can replace this with your desired action)
            if (question1Answer === 'Yes' && question2Answer === 'Yes') {
                // User answered both questions with "Yes"
                //alert("Congratulations! You are eligible to proceed.");
            } else {
                // User answered at least one question with "No"
                alert("Sorry, you are not eligible to proceed.");
            }

            // Hide the Marriage questions popup
            hideQuestions();
        });

        // Function to show the Death questions popup
        function showDeathQuestions() {
            // Show the Death questions popup
            $('#questionPopupOverlay').fadeIn();
        }

        // Function to handle the click on the Death section's expand-button
        $('.box').eq(2).find('.expand-button').on('click', function () {
            // Check if the user already accepted the Terms and Conditions
            if ($('#termsCheck').prop('checked')) {
                // Show the Death questions popup
                showDeathQuestions();
            } else {
                // If the user didn't accept the Terms and Conditions, show the Terms and Conditions popup first
                $('#popupOverlay').fadeIn();
            }
        });

        // Handle Next button click for Death questions
        $('#btnNext').on('click', function () {
            // Get the selected answers from the radio buttons
            const question1Answer = $("input[name='question1']:checked").val();
            const question2Answer = $("input[name='question2']:checked").val();

            // Do something with the answers (you can replace this with your desired action)
            if (question1Answer === 'Yes' && question2Answer === 'Yes') {
                // User answered both questions with "Yes"
                //alert("Congratulations! You are eligible to proceed.");
            } else {
                // User answered at least one question with "No"
                alert("Sorry, you are not eligible to proceed.");
            }

            // Hide the Death questions popup
            hideQuestions();
        });

        // Function to hide the questions popup
        function hideQuestions() {
            // Hide the questions popup
            $('#questionPopupOverlay').fadeOut();
        }
    });
</script>



<script>
    // Function to show the Birth questions popup
    function showBirthQuestions() {
        // Show the Birth questions popup
        $('#questionPopupOverlay').fadeIn();
    }

    // Function to hide the Birth questions popup
    function hideBirthQuestions() {
        // Hide the Birth questions popup
        $('#questionPopupOverlay').fadeOut();
    }

    // Function to handle the click on the Birth section's expand-button
    function handleBirthClick() {
        // Check if the user already accepted the Terms and Conditions
        if ($('#termsCheck').prop('checked')) {
            showBirthQuestions();
        } else {
            // If the user didn't accept the Terms and Conditions, show the Terms and Conditions popup first
            $('#popupOverlay').fadeIn();
        }
    }

    // Add event listener to the Birth section's expand-button
    $('.box').eq(0).find('.expand-button').on('click', function () {
        handleBirthClick();
    });

    // Handle Next button click for Birth questions
    $('#btnNext').on('click', function () {
        // Get the selected answers from the radio buttons
        const question1Answer = $("input[name='question1']:checked").val();
        const question2Answer = $("input[name='question2']:checked").val();

        // Do something with the answers (you can replace this with your desired action)
        if (question1Answer === 'Yes' && question2Answer === 'Yes') {
            // User answered both questions with "Yes"
            //alert("Congratulations! You are eligible to proceed.");
            // You can redirect to the "Birth" page here
            window.location.href = "{{ route('login') }}";
        } else {
            // User answered at least one question with "No"
            alert("Sorry, you are not eligible to proceed.");
        }

        // Hide the Birth questions popup
        hideBirthQuestions();
    });

    // Handle Cancel button click for Birth questions
    $('#btnCancel').on('click', function () {
        // Hide the Birth questions popup
        hideBirthQuestions();

        // If needed, show the Terms and Conditions popup again
        $('#popupOverlay').fadeIn();

        // Reinitialize the event listeners for the expand-buttons after canceling the Birth questions
        initializeExpandButtons();
    });

    // Function to handle the click on the Marriage section's expand-button
    function handleMarriageClick() {
        // Check if the user already accepted the Terms and Conditions
        if ($('#termsCheck').prop('checked')) {
            // Redirect to the login page for Marriage section
            window.location.href = "{{ route('login') }}";
        } else {
            // If the user didn't accept the Terms and Conditions, show the Terms and Conditions popup first
            $('#popupOverlay').fadeIn();
        }
    }

    // Function to handle the click on the Death section's expand-button
    function handleDeathClick() {
        // Check if the user already accepted the Terms and Conditions
        if ($('#termsCheck').prop('checked')) {
            // Redirect to the login page for Death section
            window.location.href = "{{ route('login') }}";
        } else {
            // If the user didn't accept the Terms and Conditions, show the Terms and Conditions popup first
            $('#popupOverlay').fadeIn();
        }
    }

    // Add event listeners to the Marriage and Death sections' expand-buttons
    $('.box').eq(1).find('.expand-button').on('click', function () {
        handleMarriageClick();
    });

    $('.box').eq(2).find('.expand-button').on('click', function () {
        handleDeathClick();
    });

    // Function to initialize event listeners for all sections' expand-buttons
    function initializeExpandButtons() {
        // Add event listener to the Marriage section's expand-button
        $('.box').eq(1).find('.expand-button').on('click', function () {
            handleMarriageClick();
        });

        // Add event listener to the Death section's expand-button
        $('.box').eq(2).find('.expand-button').on('click', function () {
            handleDeathClick();
        });
    }

    // Call the function to initialize the event listeners initially
    initializeExpandButtons();

    // Add an event listener to the Accept button
    $('#btnAccept').on('click', function () {
        // Hide the Terms and Conditions popup
        $('#popupOverlay').fadeOut();

        // Check if the Birth box is expanded
        if ($('.box').eq(0).hasClass('expanded')) {
            showBirthQuestions();
        }

        // Check if the user accepted the Terms and Conditions for Marriage section
        if ($('.box').eq(1).hasClass('expanded') && $('#termsCheck').prop('checked')) {
            // Redirect to the login page for Marriage section
            window.location.href = "{{ route('login') }}";
        }

        // Check if the user accepted the Terms and Conditions for Death section
        if ($('.box').eq(2).hasClass('expanded') && $('#termsCheck').prop('checked')) {
            // Redirect to the login page for Death section
            window.location.href = "{{ route('login') }}";
        }

        // Reinitialize the event listeners for the expand-buttons after accepting the Terms and Conditions
        initializeExpandButtons();
    });

    // Handle checkbox change event
    $('#termsCheck').on('change', function () {
        $('#btnAccept').prop('disabled', !this.checked);
    });

    // Close the popup when the close icon or Decline button is clicked
    $('.popup-close, #btnDecline').on('click', function () {
        // Refresh the page to its original state
        location.reload();
    });
</script>


<script>
    // Function to handle the click on the Marriage section's expand-button
    function handleMarriageClick() {
        // Check if the user already accepted the Terms and Conditions
        if ($('#termsCheck').prop('checked')) {
            // Show the Marriage questions popup
            showMarriageQuestions();
        } else {
            // If the user didn't accept the Terms and Conditions, show the Terms and Conditions popup first
            $('#popupOverlay').fadeIn();
        }
    }

    // Function to handle the click on the Death section's expand-button
    function handleDeathClick() {
        // Check if the user already accepted the Terms and Conditions
        if ($('#termsCheck').prop('checked')) {
            // Show the Death questions popup
            showDeathQuestions();
        } else {
            // If the user didn't accept the Terms and Conditions, show the Terms and Conditions popup first
            $('#popupOverlay').fadeIn();
        }
    }

    // Add event listeners to the Marriage and Death sections' expand-buttons
    $('.box').eq(1).find('.expand-button').on('click', function () {
        handleMarriageClick();
    });

    $('.box').eq(2).find('.expand-button').on('click', function () {
        handleDeathClick();
    });
</script>
