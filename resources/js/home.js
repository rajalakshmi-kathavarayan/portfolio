// ======================== script for home section typing effect =================//
// toastr.options = {
//   closeButton: true,
//   newestOnTop: false,
//   progressBar: true,
//   positionClass: "toast-top-right",
//   preventDuplicates: false,
//   onclick: null,
//   showDuration: "300",
//   hideDuration: "1000",
//   timeOut: "5000",
//   extendedTimeOut: "1000",
//   showEasing: "swing",
//   hideEasing: "linear",
//   showMethod: "fadeIn",
//   hideMethod: "fadeOut",
// };
import mixitup from 'mixitup';
const text = document.querySelector('.typing-text');

    const words = [
      "I'm <span class='highlight'>Rajalakshmi</span>",
      "I'm a <span class='highlight'>Full-stack Developer</span>",
    ];

    // --------------- start typing effect---------------//
    setTyper(text, words);

    function setTyper(element, words) {

      const LETTER_TYPE_DELAY = 75;
      const WORD_STAY_DELAY = 2000;

      const DIRECTION_FORWARDS = 0;
      const DIRECTION_BACKWARDS = 1;

      let direction = DIRECTION_FORWARDS;
      let wordIndex = 0;
      let letterIndex = 0;

      let wordTypeInterval;

      startTyping();

      function startTyping() {
        wordTypeInterval = setInterval(typeLetter, LETTER_TYPE_DELAY);
      }

      function typeLetter() {
        const word = words[wordIndex];

        if (direction === DIRECTION_FORWARDS) {
          letterIndex++;

          if (letterIndex === word.length) {
            direction = DIRECTION_BACKWARDS;
            clearInterval(wordTypeInterval);
            setTimeout(startTyping, WORD_STAY_DELAY);
          }

        } else if (direction === DIRECTION_BACKWARDS) {
          letterIndex--;

          if (letterIndex === 0) {
            nextWord();
          }
        }

        const textToType = word.substring(0, letterIndex);
        element.innerHTML = textToType;
      }

      function nextWord() {

        letterIndex = 0;
        direction = DIRECTION_FORWARDS;
        wordIndex++;

        if (wordIndex === words.length) {
          wordIndex = 0;
        }

      }
    }

    // ------------------mixitup package for portfolio section ---------------//
    var mixer = mixitup('.portfolio-gallery');

    // ------------------scroll animation ----------------//
    const sr = ScrollReveal({
        orgin:"top",
        distance: "80px",
        duration:2000,
        reset: true,
    });

    sr.reveal(".typing-text",{delay: 100});
    sr.reveal(".developerImage",{delay: 200});
    sr.reveal(".para-text",{delay: 200});
    sr.reveal(".downloadBtn",{delay: 200});
    sr.reveal(".myskill",{delay: 200});
    sr.reveal(".social",{delay: 200});
    sr.reveal(".about-image1",{delay: 320});
    sr.reveal(".about-image2",{delay: 320});
    sr.reveal(".personal-info1",{delay: 320});
    sr.reveal(".personal-info2",{delay: 320});
    sr.reveal(".contacttext",{delay: 320});


    sr.reveal(".devImage2",{delay: 320});
    sr.reveal(".edupara",{ interval: 200});
    sr.reveal(".exppara",{ interval: 200});
    sr.reveal(".port-box",{ interval: 200});
    sr.reveal(".namesection",{ interval: 200});
    sr.reveal(".mailsection",{ interval: 200});
    sr.reveal(".messagesection",{ interval: 200});
    sr.reveal(".btnsection",{ interval: 200});
    sr.reveal(".project",{});

    const srLeft = ScrollReveal({
        origin: "left",
        distance: "80px",
        duration: 2000,
        reset: true,
    })

    srLeft.reveal(".aboutContent",{delay: 100});
    srLeft.reveal(".skill-left",{delay: 100});
    srLeft.reveal(".skill-right",{delay: 100});
    srLeft.reveal(".educationExperience",{delay: 200});
    srLeft.reveal(".contact-image",{delay: 200});

// ------------------contact form js --------------------//

$(document).ready(function () {

    $('#contactForm').submit(function (e) {
        e.preventDefault();
        var name = $('#name').val().trim();
        var email = $('#email').val().trim();
        var message = $('#message').val().trim();


        if (name === '' || email === '' || message === '') {
            toastr.error('Please fill all required fields');
        } else {

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (response) {

                    toastr.success('Message sent successfully');
                    $('#contactForm')[0].reset();
                },
                error: function (xhr, status, error) {

                    toastr.error('Failed to send message');
                }
            });
        }
    });
});

// --------------------up arrow icon js -------------//
// document.addEventListener('DOMContentLoaded', function() {

//     var upArrowIcon = document.querySelector('.up-arrow-icon');

//     upArrowIcon.addEventListener('click', function(e) {
//         e.preventDefault();
//         window.scrollTo({
//             top: 0,
//             behavior: 'smooth'
//         });
//     });
// });

