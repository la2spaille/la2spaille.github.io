// // GenukaJSON = {
// //     compagniesJSON: null,
// //     collectionsJSON: null,
// //     productJSON: null,
// //     fetch:
// //         fetch(`https://dashboard.genuka.com/api/2021-10/companies/byurl?url=${window.location.origin}/`).then(function (response) {
// //             response.json().then(function (compagnies) {
// //                 compagniesJSON = compagnies

// //                 fetch(`https://dashboard.genuka.com/api/2021-10/companies/${compagniesJSON.id}/products`).then(function (response) {
// //                     response.json().then(function (product) {
// //                         productJSON = product
// //                         // for (let i = 0; i < product.data.length; i++) {
// //                         //     productCard.id = i
// //                         //     document.querySelector('.w-product-card-wrapper').innerHTML += productCard.outerHTML
// //                         // }
// //                     })
// //                 })
// //                 fetch(`https://dashboard.genuka.com/api/2021-10/companies/${compagniesJSON.id}/collections`).then(function (response) {
// //                     response.json().then(function (collections) {
// //                         collectionsJSON = collections
// //                     })
// //                 })
// //             })
// //         })

// // }


// window.F = {}
// F.TL = class {
//     constructor() {
//         this.arr =[],
//         this.del = 0
//     }
//     from(t) {
//         this.del += R.Has(t, "delay") ? t.delay : 0,
//         t.delay = this.del,
//         this.arr.push(new R.M(t))
//     }
//     play(t) {
//         this.run("play", t)
//     }
//     pause() {
//         this.run("pause")
//     }
//     run(r, t) {
//         var s = this.arr.length
//           , e = t || void 0;
//         for (let t = 0; t < s; t++)
//             this.arr[t][r](e)
//     }
// }

// F.AddTocart = class {
//     constructor(element) {
//         this.element = element
//         this.data = this.element.querySelector('.add-to-cart-input')
//         this.btn = this.element.querySelector('button')
//         this.data.dataset.qty = 0,
//             this.increment = this.increment.bind(this);
//         this.decrement = this.decrement.bind(this);
//         this.addTocart = this.addTocart.bind(this);
//         this.element.querySelector(".minus").addEventListener('click', this.decrement);
//         this.element.querySelector(".plus").addEventListener('click', this.increment);
//         this.element.querySelector("button").addEventListener('click', this.addTocart);
//     }
//     increment() {
//         if (this.data.textContent < 9) {
//             this.data.textContent++
//         }
//     }
//     decrement() {
//         if (this.data.textContent > 0) {
//             this.data.textContent--
//         }
//     }
//     addTocart() {
//         this.data.dataset.qty = parseInt(this.data.dataset.qty) + parseInt(this.data.textContent)
//         localStorage.setItem(
//             this.data.dataset.index,
//             `{
//                 "id":${this.data.dataset.id},
//                 "price":${this.data.dataset.price},
//                 "quantity":${parseInt(this.data.dataset.qty)},
//                 "add_to_cart_date": ${'date'},
//                 "note":"",   
//                 "complement": "",  
//     }`)
//     }
// }
// F.Lightboxes = class {
//     constructor(element) {
//         this.element = element
//         this.reveal = this.reveal.bind(this);
//     }
//     reaveal() {

//     }
// }
// addTocart = new F.AddTocart(document.querySelector('.c-add-to-cart'))
// console.log(addTocart)


(async function fetchGenuka() {
    let reponse = await fetch(`https://dashboard.genuka.com/api/2021-10/companies/byurl?url=${window.location.origin}/`)
    let data = await reponse.json()
    console.log(data)
})()