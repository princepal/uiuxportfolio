(function () {
  document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('.navbar-area');
    const logo = document.getElementById('logo');
    function onScroll() {
      if (window.pageYOffset === 0) {
        header.classList.remove('sticky');
        logo.src = 'https://princepaluiux.com/assets/images/white-logo.svg';
      } else {
        header.classList.add('sticky');
        logo.src = 'https://princepaluiux.com/assets/images/logo.svg';
      }
    }
    onScroll();
    window.addEventListener('scroll', onScroll);
  });

  // scroll top
  document.addEventListener("DOMContentLoaded", function () {
    var backToTop = document.querySelector(".scroll-top");
    window.addEventListener("scroll", function () {
      if (
        document.body.scrollTop > 50 ||
        document.documentElement.scrollTop > 50
      ) {
        backToTop.style.display = "flex";
      } else {
        backToTop.style.display = "none";
      }
    });
    backToTop.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  });

  // section menu active
  document.addEventListener("DOMContentLoaded", function () {
    function onScroll(event) {
      if (window.location.pathname === "/") {
        var sections = document.querySelectorAll(".page-scroll");
        var scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;
        for (var i = 0; i < sections.length; i++) {
          var currLink = sections[i];
          var val = currLink.getAttribute("data-tab");
          if (val.startsWith("#")) {
            var refElement = document.querySelector(val);
            var scrollTopMinus = scrollPos + 73;
            if (
              refElement &&
              refElement.offsetTop <= scrollTopMinus &&
              refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
            ) {
              document
                .querySelectorAll(".page-scroll.active")
                .forEach((el) => el.classList.remove("active"));
              document
                .querySelectorAll(`.page-scroll[data-tab="${val}"]`)
                .forEach((el) => el.classList.add("active"));
            } else {
              document
                .querySelectorAll(`.page-scroll[data-tab="${val}"]`)
                .forEach((el) => el.classList.remove("active"));
            }
          }
        }
      }
    }

    window.document.addEventListener("scroll", onScroll);

    checkURL();
    function checkURL() {
      const currentURL = window.location.pathname;
      if (currentURL === "/") {
        document.querySelector(".homemenu").classList.add("active");
      } else {
        document.querySelector(".homemenu").classList.remove("active");
      }

      if (currentURL === "/me") {
        document.getElementById("me").classList.add("active");
        document.querySelector(".homemenu").classList.remove("active");
        document.querySelector(".homemenu").setAttribute("href", base_url);
      }
    }

    document.querySelector(".homemenu").addEventListener("click", function (e) {
      if (window.location.pathname !== "/") {
        e.preventDefault();
        window.location.href = base_url;
      }
    });
  });

  var pageLinks = document.querySelectorAll(".page-scroll");
  pageLinks.forEach((elem) => {
    elem.addEventListener("click", (e) => {
      const href = elem.getAttribute("href");
      if (href.startsWith("#")) {
        e.preventDefault();
        document.querySelector(href).scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    });
  });
})();

// Load more content
document.addEventListener('DOMContentLoaded', function () {
  function initializeSection(section) {
    const contents = section.querySelectorAll('.postContent');
    const loadMoreButton = section.querySelector('.loadMore');

    contents.forEach((content, index) => {
      if (index >= 6) {
        content.style.display = 'none';
      } else {
        content.style.display = 'block';
      }
    });

    if (contents.length <= 6) {
      loadMoreButton.classList.add('d-none');
    }

    loadMoreButton.addEventListener('click', function (e) {
      e.preventDefault();

      const hiddenContents = Array.from(contents).filter(content => content.style.display === 'none');
      hiddenContents.slice(0, 6).forEach(content => {
        content.style.display = 'block';
      });

      if (hiddenContents.length <= 6) {
        this.classList.add('d-none');
      }
    });
  }
  document.querySelectorAll('.card-area').forEach(initializeSection);
});

// navbar sideMenu
document.addEventListener("DOMContentLoaded", function () {
  let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

  sideMenuLeftNine.addEventListener("click", function () {
    sidebarLeft.classList.add("open");
    overlayLeft.classList.add("open");
  });
  
  let navbarTogglerNine = document.querySelector(
    ".navbar-nine .navbar-toggler"
  );
  navbarTogglerNine.addEventListener("click", function () {
    navbarTogglerNine.classList.toggle("active");
  });
  
  let sidebarLeft = document.querySelector(".sidebar-left");
  let overlayLeft = document.querySelector(".overlay-left");
  let sidebarClose = document.querySelector(".sidebar-close .close");
  let sideMenus = document.querySelectorAll(".side-menu");

  overlayLeft.addEventListener("click", function () {
    sidebarLeft.classList.toggle("open");
    overlayLeft.classList.toggle("open");
  });

  function removeOpenClass() {
    sidebarLeft.classList.remove("open");
    overlayLeft.classList.remove("open");
  }

  sidebarClose.addEventListener("click", removeOpenClass);

  sideMenus.forEach(function (sideMenu) {
    sideMenu.addEventListener("click", removeOpenClass);
  });
});

// Youtube video popup
function openPopup() {
  var popupHtml = `
      <div id="videoPopup" class="popup" style="display: block;">
          <div class="popup-content">
              <span class="close" onclick="closePopup()">&times;</span>
              <iframe id="youtubeVideo" src="https://www.youtube.com/embed/CE5ULY98gL0?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
      </div>`;
  document.body.insertAdjacentHTML('beforeend', popupHtml);
}
function closePopup() {
  var popup = document.getElementById('videoPopup');
  if (popup) {
    popup.remove();
  }
}
window.onclick = function (event) {
  var popup = document.getElementById('videoPopup');
  if (popup && event.target == popup) {
    closePopup();
  }
}

// Theme dark mode
document.addEventListener('DOMContentLoaded', () => {
  const toggleButton = document.getElementById('dark-mode-toggle');
  const body = document.body;

  const applyDarkMode = () => {
    const userPreference = localStorage.getItem('darkMode');
    const systemPreference = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

    if (userPreference === 'true' || (!userPreference && systemPreference)) {
      body.classList.add('dark-mode');
    } else {
      body.classList.remove('dark-mode');
    }

    if (userPreference !== null) {
      body.classList.add('dark-mode-override');
    } else {
      body.classList.remove('dark-mode-override');
    }
  };

  applyDarkMode();

  toggleButton.addEventListener('click', () => {
    const isDarkMode = body.classList.toggle('dark-mode');
    localStorage.setItem('darkMode', isDarkMode ? 'true' : 'false');
    applyDarkMode();
  });

  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', applyDarkMode);
});

// Append Google form on click modal button
function appendGoogleForm() {
  const modalBody = document.querySelector('#googleForms .modal-body');
  const iframe = document.createElement('iframe');
  iframe.src = "https://docs.google.com/forms/d/e/1FAIpQLSfEZk2bq14xDrSe1w6G6If48dEU4RVKPtPe8WNYZ9S8FFuieQ/viewform?embedded=true";
  iframe.width = "100%";
  iframe.height = "600";
  iframe.frameBorder = "0";
  iframe.marginHeight = "0";
  iframe.marginWidth = "0";
  iframe.textContent = "Loading…";
  modalBody.appendChild(iframe);
}
document.querySelectorAll('[data-bs-toggle="modal"][data-bs-target="#googleForms"]').forEach(button => {
  button.addEventListener('click', appendGoogleForm);
});
const googleFormsModal = document.getElementById('googleForms');
googleFormsModal.addEventListener('hidden.bs.modal', function () {
  const modalBody = document.querySelector('#googleForms .modal-body');
  modalBody.innerHTML = '';
});

// Append Calendly Code
document.addEventListener("DOMContentLoaded", function () {
  var isLoaded = false;

  function loadCalendlyWidget() {
    if (isLoaded) return;
    isLoaded = true;

    var offsetDiv = document.createElement("div");
    offsetDiv.className = "offset";

    var calendlyDiv = document.createElement("div");
    calendlyDiv.className = "calendly-inline-widget";
    calendlyDiv.setAttribute("data-url", "https://calendly.com/princepal/30min-1?hide_event_type_details=1&hide_gdpr_banner=1");

    offsetDiv.appendChild(calendlyDiv);

    document.getElementById("calendlyContainer").appendChild(offsetDiv);

    Calendly.initInlineWidget({
      url: "https://calendly.com/princepal/30min-1?hide_event_type_details=1&hide_gdpr_banner=1",
      parentElement: offsetDiv
    });
  }

  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      loadCalendlyWidget();
      window.removeEventListener("scroll", arguments.callee);
    }
  });
});
