import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

console.log("🚀 Hero Banner JS is executing...");

// ✅ Delay execution until the entire window is loaded
window.addEventListener("load", function () {
    console.log("🚀 Window loaded, checking wp.blocks...");

    if (typeof wp !== "undefined" && typeof wp.blocks !== "undefined") {
        console.log("✅ WordPress scripts loaded!");

        registerBlockType('miloslive/hero-banner', {
            edit: Edit,
            save: Save,
        });

        console.log("✅ Hero Banner: Block registered successfully!");
    } else {
        console.error("❌ Error: wp.blocks is not available!");
    }
});
