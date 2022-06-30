import {faq} from './modulos/faq.js';
import {renderTabs} from './modulos/tabs.js';
import { botonSumarRestar } from './modulos/boton-sumar-restar.js';
import { message } from './modulos/message.js';
import { renderCkeditor } from './modulos/ckeditor.js';
import {renderCart} from './modulos/cart.js';
import {renderForm} from './modulos/form.js';
import {renderProducts} from './modulos/products.js';
import {renderMenu} from './modulos/menu.js';
import {fingerprint} from './modulos/fingerprint.js';

faq();
botonSumarRestar();
renderTabs();
message();
renderCkeditor();
renderForm();
renderProducts();
renderMenu();
renderCart();
fingerprint();

