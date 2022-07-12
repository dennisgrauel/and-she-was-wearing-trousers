const textPanel = document.querySelector('#nav-texts-panel');
const aboutPanel = document.querySelector('#about-panel');

const panelBtns = document.querySelectorAll('#text-open, #text-close, #about-open, #about-close, #about-cont');

for (panelBtn of Array.prototype.slice.call(panelBtns)) {
  const panelType = panelBtn.id.split('-')[0];
  const panel = (panelType == 'text') ? textPanel : aboutPanel;
  panelBtn.addEventListener("click", e => {
    panel.classList.toggle('active');
    const ariaHidden = (panel.ariaHidden == "true") ? "false" : "true";
    panel.setAttribute("aria-hidden", ariaHidden);
  });
}
