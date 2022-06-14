<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\SoldItem;
use App\Models\Product;

class InvoiceController extends Controller
{

    public function viewInvoice($id)
    {
        $sold_items = SoldItem::join('products' , 'products.id', '=' ,'sold_items.product_id')
        ->select('products.name' ,'products.sku' ,'products.description' , 'sold_items.quantity' , 'sold_items.selling_price')
        ->where('sold_items.invoice_id', '=', $id)
        ->get();

        $invoices = Invoice::find($id);
        
        return view('internals.viewinvoice')->with('invoices' , $invoices)
                                            ->with('sold_items' , $sold_items);
    }

    public function invoiceList()
    {
        $invoices =  Invoice::all();
        return view('internals.invoicelist')->with('invoices', $invoices);
    }

    public function deleteInvoice($id)
    {
        $invoice = Invoice::find($id);
        $invoice->soldItems()->delete();
        $invoice->delete();

        return redirect('/invoicelist');
    }
    
    public function placeOrder(Request $request)
    {
        
        // dd($request->product1);

        $this->validate($request, [
            'invoice_no' => 'required',
            'email' => 'required',
            'payment_method' => 'required',
            'date' => 'required'
        ]);
        
        $total = 0;

        $cart = [];

        //PRODUCT 1

        if($request->product1 != 'none')
        {
            
            $item['product_id'] = $request->product1;
            $item['quantity'] = $request->quantity1;
            $item['selling_price'] = $request->price1;
            $cart[] = $item;

        }
         //PRODUCT 2

        if($request->product2 != 'none')
        {
            
            $item['product_id'] = $request->product2;
            $item['quantity'] = $request->quantity2;
            $item['selling_price'] = $request->price2;
            $cart[] = $item;

        }
         //PRODUCT 3

        if($request->product3 != 'none')
        {
            
            $item['product_id'] = $request->product3;
            $item['quantity'] = $request->quantity3;
            $item['selling_price'] = $request->price3;
            $cart[] = $item;

        }
         //PRODUCT 4

        if($request->product4 != 'none')
        {
            
            $item['product_id'] = $request->product4;
            $item['quantity'] = $request->quantity4;
            $item['selling_price'] = $request->price4;
            $cart[] = $item;

        }
         //PRODUCT 5

        if($request->product5 != 'none')
        {
            
            $item['product_id'] = $request->product5;
            $item['quantity'] = $request->quantity5;
            $item['selling_price'] = $request->price5;
            $cart[] = $item;

        }

         //PRODUCT 6

        if($request->product6 != 'none')
        {
            
            $item['product_id'] = $request->product6;
            $item['quantity'] = $request->quantity6;
            $item['selling_price'] = $request->price6;
            $cart[] = $item;

        }

        // dd($cart);

        $invoice = new Invoice();
        $invoice->invoice_number = $request->invoice_no;
        $invoice->payment_method = $request->payment_method;
        $invoice->customer_email = $request->email;
        $invoice->date = $request->date;
        $invoice->save();

        // $products->avalable_quantity -= $request->qty1;

        foreach($cart as $item)
        {

            $sold_item = new SoldItem();
            $sold_item->product_id = $item['product_id'];
            $sold_item->invoice_id = $invoice->id;
            $sold_item->quantity = $item['quantity'];
            $sold_item->selling_price = $item['selling_price'];
            $sold_item->save();

            // $product = new Product();
            // $product->available_quantity -= $item['quantity'];
            // $product->save();

            $total += $item['quantity'] * $item['selling_price'];

        }

        $invoice->total = $total;
        $invoice->save();
        
        // return view('internals.invoice');
        // return Invoice::all();

        return redirect('/invoicelist');

    }
}
