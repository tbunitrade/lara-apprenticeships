// advokatapp/postcss.config.js
module.exports = {
    plugins: [
        require('postcss-import'), // важно: первым
        require('tailwindcss'),    // если Tailwind реально используется; иначе можно удалить эту строку
        require('autoprefixer'),
    ],
};
