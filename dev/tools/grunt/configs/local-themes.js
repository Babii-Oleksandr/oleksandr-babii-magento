/**
 * Magento/luma - en_US
 * grunt exec:luma && grunt less:luma
 * grunt exec:luma && grunt less:luma && grunt watch
 *
 * Oleksandrb/luma - uk_UA
 * grunt exec:oleksandrb_luma_uk_ua && grunt less:oleksandrb_luma_uk_ua
 * grunt exec:oleksandrb_luma_uk_ua && grunt less:oleksandrb_luma_uk_ua && grunt watch:oleksandrb_luma_uk_ua
 */
module.exports = {
    luma: {
        area: 'frontend',
        name: 'Magento/luma',
        locale: 'en_US',
        files: [
            'css/styles-m',
            'css/styles-l'
        ],
        dsl: 'less'
    },
    oleksandrb_luma_uk_ua: {
        area: 'frontend',
        name: 'Oleksandrb/luma',
        locale: 'uk_UA',
        files: [
            'css/styles-m',
            'css/styles-l'
        ],
        dsl: 'less'
    }
};
