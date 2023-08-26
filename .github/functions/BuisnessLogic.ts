function procesPayment(order: Order) {
    switch (order.payMethod) {
        case "Efectivo": {
            let orderAmmount = evaluateProductsPayment(order.products);
            let subtotal = evaluatSubTotal(orderAmmount, order.deliveryAmmount);
            break;
        }
        case "Tarjeta": {
            let orderAmmount = evaluateProductsPayment(order.products);
            let subtotal = evaluatSubTotal(orderAmmount, order.deliveryAmmount);
            break;
        }
        case "Pago Móvil": {
            let orderAmmount = evaluateProductsPayment(order.products);
            let subtotal = evaluatSubTotal(orderAmmount, order.deliveryAmmount);
        }
        case "Creditos": {
            let orderAmmount = evaluateProductsPayment(order.products);
            let subtotal = evaluatSubTotal(orderAmmount, order.deliveryAmmount);
            break;
        }
        default: {
            throw console.error("Invalid PayMethod");
            break;
        }
    }
}

function evaluateProductsPayment(products: Array<Product>) {
    let total = 0;
    for (let i = 0; i < products.length -1; i++) {
        total += products[i].price;
    }
    return total;
}

function evaluatSubTotal(orderAmmount: number, deliveryAmmount: number) {
    return orderAmmount + deliveryAmmount;
}

function donation(donation: boolean, ong: Ong, donationAmount: number) {
    donation? ong.id
    
}