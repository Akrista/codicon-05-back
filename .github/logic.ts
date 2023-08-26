// generic types.
type PayMethod = "Efectivo" | "Tarjeta" | "Pago Móvil" | "Creditos";
type BillDenomination = 1 | 5 | 10 | 20 | 50 | 100;
type Id = number | RegExp;
type FilePath = File | RegExp;
type Mail = string | RegExp;

type user = {
    id: Id;
    name: string;
    mail: Mail;
    credit: number; // Default to 0.0
    donationsHistory: Array<Donations>; //Default to empty Array
    orderHistory: Array<Order>; //Default to empty Array
    defaultOngforDonation?: Ong;
};

type Company = {
    id: Id;
    name: string;
    description: string;
    products: Array<Product>;
    img: FilePath;
};

type Ong = {
    id: Id;
    name: string;
    description: string;
    donations: Array<Donations>;
    img: FilePath;
};

type Product = {
    id: Id;
    name: string;
    description: string;
    price: number;
    img: File | RegExp;
};
type Order = {
    orderId: Id;
    companyId: Id;
    userId: Id;
    products: Array<Product>;
    date: Date;
    payMethod: PayMethod;
    cash: boolean; //Default false
    Billdenomination: BillDenomination;
    totalAmmount: number;
    deliveryAmmount: number;
    suggestdonation: boolean;
    donation: boolean;
    ongId?: Id;
    donationId?: Id;
};

type Donations = {
    donationId: Id;
    userId: Id;
    ongId: Id;
    date: Date;
    ammount: number;
    order: boolean; // Default to false
    orderId?: Id;
};
