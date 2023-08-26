// generic types.

type Id = {
    id: Number | RegExp;
};
type FilePath = {
    filepath: File | RegExp;
};

type Donations = {
    donationId: Id;
    ammount: Number;
    date: Date;
    ongId: Id;
    userId: Id;
    ordenId?: Id;
    order: Boolean;
};

type user = {
    id: Id;
    name: String;
    mail: String | RegExp;
    credit: Number;
    donaciones: Array<Donations>;
    orderHistory: Array<Orders>;
};
type empresa = {
    id: Id;
    name: String;
    description: String;
    donations: Array<Donations>;
    img: FilePath;
};

type ong = {
    id: Id;
    name: String;
    description: String;
    donations: Array<Donations>;
    img: FilePath;
};

type Product = {
    id: Id;
    name: String;
    description: String;
    img: File | RegExp;
};
type Orders = {
    orderId: Id;
    ammount: Number;
    date: Date;
    userId: Id;
    donationId?: Id;
    ongId?: Id;
    donation: Boolean;
    products: Array<Product>;
};
