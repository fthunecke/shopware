import orderList from 'module/core.order/src/components/page/core-order-list';
import orderDetail from 'module/core.order/src/components/page/core-order-detail';
import 'module/core.order/src/components';

export default {
    id: 'core.order',
    name: 'Bestell Übersicht',
    description: 'Enter description here...',
    version: '1.0.0',
    targetVersion: '1.0.0',
    color: '#CA8EE0',
    icon: 'box',

    routes: {
        index: {
            components: {
                default: orderList
            },
            path: 'order'
        },
        detail: {
            component: orderDetail,
            path: 'order/detail/:uuid',
            meta: {
                parentPath: 'core.order.index'
            }
        }
    },

    navigation: {
        root: [{
            'core.order.index': {
                icon: 'box',
                color: '#CA8EE0',
                name: 'Bestell Übersicht'
            }
        }]
    },

    commands: [{
        title: 'Übersicht',
        route: 'order.index'
    }, {
        title: '%0 öffnen',
        route: 'order.detail'
    }],

    shortcuts: {
        index: {
            mac: {
                title: 'order.index.shortcut.mac',
                combination: [
                    'CMD',
                    'O'
                ]
            },
            win: {
                title: 'order.index.shortcut.win',
                combination: [
                    'CTRL',
                    'O'
                ]
            }
        }
    }
};
