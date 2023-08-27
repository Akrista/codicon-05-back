// class donation implements Donations{
//     donationId: Id;
//     userId: Id;
//     ongId: Id;
//     date: Date;
//     ammount: number;
//     order: boolean;
//     orderId?: Id | undefined;
//     constructor() {
//         this.donationId
//         this.userId
//         this.ongId
//         this.date
//         this.ammount
//         this.order
//     }
// }
function procesPayment(order: Order) {
    let orderAmmount = evaluateProductsPayment(order.products);
    let subtotal = evaluatSubTotal(orderAmmount, order.deliveryAmmount);
    let donationAmmount = proposeDonation(subtotal);
    total = finaliseorderifdonation(order, order.donation, donation.ong, donationAmmount, subtotal)
    return finaliseorderifdonation()

}
    
function evaluateProductsPayment(products: Array<Product>) {
    let total = 0;
    for (let i = 0; i < products.length - 1; i++) {
        total += products[i].price;
    }
    return total;
}

function evaluatSubTotal(orderAmmount: number, deliveryAmmount: number) {
    return orderAmmount + deliveryAmmount;
}
function proposeDonation(subtotal: number) {
    let changeAmmount = subtotal % 10;
    if (changeAmmount > 5) {
        changeAmmount -= 5;
    }

    if (
        changeAmmount === 0 ||
        changeAmmount === 1 ||
        changeAmmount === 2 ||
        changeAmmount === 3 ||
        changeAmmount === 4 ||
        changeAmmount === 5
    ) {
        return 0;
    } else if (changeAmmount < 1) {
        return 1 - changeAmmount;
    } else if (changeAmmount < 2) {
        return 2 - changeAmmount;
    } else if (changeAmmount < 3) {
        return 3 - changeAmmount;
    } else {
        return 5 - changeAmmount;
    }
}

function finaliseorderifdonation(
    order: Order,
    donation: boolean,
    ong: Ong,
    donationAmount: number,
    subtotal: number
) {
    if (donation) {
        //create Donation(ong donationAmmount)
        // create order 
       return order.totalAmmount = subtotal + donationAmount
    }
    //create order
    return order.totalAmmount = donationAmount
}
