

$(function() {
  const $toggle = $(".js-toggle");

  function activeToggle() {
    $toggle.toggleClass("active");
  }

  function openNavigation() {
    const $navigationWrapper = $(".navigationWrapper");
    $navigationWrapper.toggleClass("pcOpen");
  }

  function hideLogo() {
    const $logo = $(".logo");
    $logo.toggleClass("hide");
  }

  function hamburgerMenu() {
    activeToggle();
    openNavigation();
    hideLogo();
  }

  function setEvent() {
    $toggle.on("click", hamburgerMenu);
  }

  function init() {
    setEvent();
  }

  init();
});
