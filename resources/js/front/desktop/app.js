import {faq} from './modulos/faq.js';
import {menuButton} from './modulos/menu-hamburguer.js';
import {renderTabs} from './modulos/tabs.js';
import { botonSumarRestar } from './modulos/boton-sumar-restar.js';
import { message } from './modulos/message.js';
import { renderCkeditor } from './modulos/ckeditor.js';
import {carrito} from './modulos/carrito-añadir.js';
import {renderForm} from './modulos/form.js';
import {renderProducts} from './modulos/products.js';
import {renderMenu} from './modulos/menu.js';
import {renderNumberProducts} from './modulos/cart.js';



faq();
menuButton();
botonSumarRestar();
renderTabs();
message();
renderCkeditor();
carrito();
renderForm();
renderProducts();
renderMenu();
renderNumberProducts();

