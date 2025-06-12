// import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
// assets/app.js

// 1) (opcjonalnie) importy zewnętrznych bibliotek:
// import "@hotwired/turbo";
// import Chart from "chart.js/auto";

// 2) import CSS, jeśli chcesz bundle CSS (wcześniej ładowałeś main.css przez asset):
import '../public/style/main.css';

// 3) Stimulus + własne kontrolery:
import { Application } from "@hotwired/stimulus";
import AccordionController from "./controllers/accordion_controller";
import CsrfProtectionController from "./controllers/csrf_protection_controller";
import HelloController from "./controllers/hello_controller";
import MobileMenuController from "./controllers/mobile_menu_controller";

const application = Application.start();
application.register("accordion", AccordionController);
application.register("csrf-protection", CsrfProtectionController);
application.register("hello", HelloController);
application.register("mobile-menu", MobileMenuController);

// 4) Rejestracja Service Workera
if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker
      .register('/sw.js')
      .then(reg => console.log('✅ SW zarejestrowany:', reg.scope))
      .catch(err => console.error('❌ Błąd rejestracji SW:', err));
  });
}
