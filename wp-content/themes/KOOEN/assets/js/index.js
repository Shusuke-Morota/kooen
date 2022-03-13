

$(function() {
  const $toggle = $(".js-toggle");

  function activeDrawer() {
    $toggle.toggleClass("active");
  }

  function hamburgerMenu() {
    activeDrawer();
  }

  function setEvent() {
    $toggle.on("click", hamburgerMenu);
  }

  function init() {
    setEvent();
  }

  init();
});
