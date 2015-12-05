/**
 * Created by adam on 05/12/15.
 */
var vm = new Vue(
    {
        el: '#app',
        data: {
            message: "Hello World",
            a: 2,
            show: true
        },
        computed: {
            b: function() {
                return this.a+4;
            }
        }
    }
);

//# sourceMappingURL=all.js.map
