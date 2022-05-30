import {faq} from './modulos/faq.js';
import {menuButton} from './modulos/menu-hamburguer.js';
import {tabs} from './modulos/tabs.js';
import { botonSumarRestar } from './modulos/boton-sumar-restar.js';
import { product } from './modulos/product.js';
import { message } from './modulos/message.js';
import { renderCkeditor } from './modulos/ckeditor.js';
import {carrito} from './modulos/carrito-añadir.js';
import {renderForm} from './modulos/form.js';
import {renderTable} from './modulos/table.js';
import {renderModalDelete} from './modulos/modalDelete.js';ç

faq();
menuButton();
botonSumarRestar();
tabs();
product();
message();
renderCkeditor();
carrito();
renderForm();
renderTable();
renderModalDelete();

