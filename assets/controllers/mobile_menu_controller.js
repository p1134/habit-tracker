

import { Controller } from "@hotwired/stimulus";

export default class extends Controller {
    
//     connect() {
//   if (!this.hasMenuTarget) {
//     this.menuTarget = document.querySelector('[data-mobile-menu-target="menu"]');
//   }
// }

  static targets = ["menu", "bar", "user", "page"];

  toggle() {
this.menuTarget.classList.toggle("-translate-x-full");      // chowanie/pokazywanie menu
    this.menuTarget.classList.toggle("translate-x-0");     // zamiana pozycji

    this.barTargets.forEach(bar => {
      bar.classList.toggle("w-full");                   // prosta animacja np. dla górnego paska
    });

this.userTarget.classList.toggle("hidden");
this.userTarget.classList.toggle("translate-x-full");
    this.userTarget.classList.toggle("translate-x-0");
    this.pageTarget.classList.toggle("hidden");
  }
}
