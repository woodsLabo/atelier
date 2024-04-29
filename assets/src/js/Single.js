class Single {
  constructor() {
    this.imageThumbs = document.querySelectorAll(".js-imageThumb");
    this.changeTalentImage();
  }

  changeTalentImage() {
    const imageItem = document.querySelector(".js-imageItem");

    this.imageThumbs.forEach((thumb) => {
      thumb.addEventListener("click", function() {
        const mainImagePath = this.querySelector(".js-imageMain").textContent;
        imageItem.querySelector("img").setAttribute("src", mainImagePath);
      });
    });
  }
}

new Single();
