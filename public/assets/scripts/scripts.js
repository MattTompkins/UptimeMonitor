function changeLogoColor(elemment) {

    if (element.classList.contains('bg-emerald-500/20')) {
        element.classList.remove('bg-emerald-500/20');
        element.classList.add('bg-red-500/20');
      } else {
        element.classList.remove('bg-red-500/20');
        element.classList.add('bg-emerald-500/20');
      }
}


if (document.getElementById('js-logo-inner') && document.getElementById('js-logo-outer') ) {
    setInterval(changeLogoColor(document.getElementById('js-logo-inner')), 5000);
}