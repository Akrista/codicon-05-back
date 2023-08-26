// generic types.
type PayMethod = "Efectivo" | "Tarjeta" | "Pago Móvil" | "Creditos";
type BillDenomination = 1 | 5 | 10 | 20 | 50 | 100;
type Id = Number | RegExp;
type FilePath = File | RegExp;
type Mail = String | RegExp;

type User = {
    id: Id;
    name: String;
    mail: Mail;
    credit: Number; // Default to 0.0
    donationsHistory: Array<Donations>; //Default to empty Array
    orderHistory: Array<Orders>; //Default to empty Array
    defaultOngforDonation?: Ong;
};

type Company = {
    id: Id;
    name: String;
    description: String;
    products: Array<Product>;
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
    payMethod: PayMethod;
    cash: Boolean; //Default false
    Billdenomination: BillDenomination;
    ammount: Number;
    suggestdonation: Boolean;
    donation: Boolean;
    ongId?: Id;
    donationId?: Id;
};

type Donations = {
    donationId: Id;
    userId: Id;
    ongId: Id;
    date: Date;
    ammount: Number;
    order: Boolean; // Default to false
    orderId?: Id;
};
