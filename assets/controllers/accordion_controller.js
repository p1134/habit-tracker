import { Controller } from "@hotwired/stimulus";

export default class extends Controller {
  static targets = [
    "regularityBtn", "regularityBox",
    "developBtn", "developBox",
    "quantityBtn", "quantityBox"
  ];

  toggleRegularity() {
    this.regularityBoxTarget.classList.toggle("hidden");
    this.regularityBtnTarget.classList.toggle("rotate-90");
  }

  toggleDevelop() {
    this.developBoxTarget.classList.toggle("hidden");
    this.developBtnTarget.classList.toggle("rotate-90");
  }

  toggleQuantity() {
    this.quantityBoxTarget.classList.toggle("hidden");
    this.quantityBtnTarget.classList.toggle("rotate-90");
  }
}
