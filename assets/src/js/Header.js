class Header {
  constructor() {
    this.header = document.querySelector(".js-header");
    this.humBtm = document.querySelector(".js-humBtn");
    this.navLink = document.querySelectorAll(".js-nav a");
    this.scorrllLinks = document.querySelectorAll('a[href^="/#"]');
    this.btnHandler();
    this.scroller();
  }

  btnHandler() {
    this.humBtm.addEventListener("click", () => this.header.classList.toggle("is-open"));
  }

  scroller() {
    this.scorrllLinks.forEach((scorrllLink) => {
      scorrllLink.addEventListener("click", (e) => {
        const hrefLink = scorrllLink.getAttribute("href");
        const targetContent = document.getElementById(hrefLink.replace("/#", ""));
        if (targetContent != null) {
          e.preventDefault();
          const rectTop = targetContent.getBoundingClientRect().top;
          const positionY = window.pageYOffset;
          const spacer = this.header.classList.contains("is-open") ? 60 : 85;
          const target = rectTop + positionY - spacer ;
          window.scrollTo({
            top: target,
            behavior: "smooth",
          });
          window.addEventListener("scrollend", () => { // sp時でhumメニューを開いている場合に閉じる
            if (this.header.classList.contains("is-open")) this.header.classList.remove("is-open");
          });
        }
      });
    });
  }
}

new Header();
