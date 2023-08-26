// generic types.

type Id = Number | RegExp;
type FilePath = File | RegExp;
type Mail = String | RegExp;

type Donations = {
    donationId: Id;
    userId: Id;
    ongId: Id;
    date: Date;
    ammount: Number;
    order: Boolean;
    ordenId?: Id;
};

type User = {
    id: Id;
    name: String;
    mail: Mail;
    credit: Number;
    donaciones: Array<Donations>;
    orderHistory: Array<Orders>;
    defaultOngforDonation?: Ong;
};
type Company = {
    id: Id;
    name: String;
    description: String;
    donations: Array<Donations>;
    img: FilePath;
};

type Ong = {
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
    price: Number;
    img: File | RegExp;
};
type Orders = {
    orderId: Id;
    companyId: Id;
    userId: Id;
    products: Array<Product>;
    date: Date;
    ammount: Number;
    suggestdonation: Boolean;
    donation: Boolean;
    ongId?: Id;
    donationId?: Id;
};

type BillDenomination = 1 | 5 | 10 | 20 | 50 | 100;
