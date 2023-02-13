import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/js/app.js',
            'resources/libs/jquery/dist/jquery.min.js',
            'resources/libs/apexcharts/dist/apexcharts.css',
            'resources/extra-libs/jvector/jquery-jvectormap-us-aea-en.js',
            'resources/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js',
            'resources/libs/bootstrap/dist/js/bootstrap.bundle.min.js',
            'resources/dist/js/app.min.js',
            'resources/dist/js/app.init.stylish.js',
            'resources/dist/js/app-style-switcher.js',
            'resources/dist/js/feather.min.js',
            'resources/dist/js/custom.min.js',
            'resources/dist/js/custom-app.js',
            'resources/dist/js/moment.min.js',
            'resources/dist/js/scroll.js',
            'resources/dist/js/sidebarmenu.js',
            'resources/dist/js/skinview.js',
            'resources/dist/js/waves.js',
            'resources/extra-libs/sparkline/sparkline.js',
            'resources/libs/apexcharts/dist/apexcharts.min.js',
            'resources/libs/jvectormap/jquery-jvectormap.min.js',
            'resources/dist/js/graph.js',
        ]),
    ],
});
