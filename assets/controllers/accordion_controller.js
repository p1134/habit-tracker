import { Controller } from "@hotwired/stimulus";

export default class extends Controller {
  static targets = [
    "regularityIcon", "regularityBox",
    "developIcon", "developBox",
    "quantityIcon", "quantityBox"
  ];

  toggleRegularity() {
    this.regularityBoxTarget.classList.toggle("hidden");
    this.regularityIconTarget.classList.toggle("rotate-90");
  }

  toggleDevelop() {
    this.developBoxTarget.classList.toggle("hidden");
    this.developIconTarget.classList.toggle("rotate-90");
  }

  toggleQuantity() {
    this.quantityBoxTarget.classList.toggle("hidden");
    this.quantityIconTarget.classList.toggle("rotate-90");
  }
}
