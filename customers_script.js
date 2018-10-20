//universal variables
var counter;
var cust_id;


function getCustomers(id, name, contact){

    var accid = id;
    var onclick_text = "editData(this.value);";

    var acc_id = document.createElement("td");
    var textid = document.createTextNode(id);
    acc_id .appendChild(textid);
    
    var acc_name = document.createElement("td");
    var textname = document.createTextNode(name);
    acc_name.appendChild(textname);

    var acc_contact = document.createElement("td");
    var textcontact = document.createTextNode(contact);
    acc_contact.appendChild(textcontact);
    

    var edit_acc = document.createElement("td");
    var b_editnode = document.createElement("button");
    var b_textupdate = document.createTextNode("EDIT");
    b_editnode.setAttribute("onclick", onclick_text);
    b_editnode.setAttribute("value", id);
    b_editnode.appendChild(b_textupdate);
    edit_acc.appendChild(b_editnode);

    var purchase_acc = document.createElement("td");
    var b_editnode = document.createElement("button");
    var b_textupdate = document.createTextNode("PURCHASE");
    b_editnode.setAttribute("onclick", onclick_text);
    b_editnode.setAttribute("value", id);
    b_editnode.appendChild(b_textupdate);
    purchase_acc.appendChild(b_editnode);

    var delete_acc = document.createElement("td");
    var b_deletenode = document.createElement("button");
    var b_textupdate = document.createTextNode("DELETE");
    b_deletenode.setAttribute("onclick",onclick_text);
    b_deletenode.setAttribute("value", id);
    b_deletenode.appendChild(b_textupdate);
    delete_acc.appendChild(b_deletenode);

    var return_acc = document.createElement("td");
    var b_updatenode = document.createElement("button");
    var b_textupdate = document.createTextNode("RETURN");
    b_updatenode.setAttribute("onclick",onclick_text);
    b_updatenode.setAttribute("value", id);
    b_updatenode.appendChild(b_textupdate);
    return_acc.appendChild(b_updatenode);


    var node1 = document.createElement("tr");
    node1.setAttribute("value", id);

    node1.appendChild(acc_id);
    node1.appendChild(acc_name);
    node1.appendChild(acc_contact);
    node1.appendChild(edit_acc);
    node1.appendChild(delete_acc);
    node1.appendChild(purchase_acc);
    node1.appendChild(return_acc);

    document.getElementById("customer").appendChild(node1);
    //creating a counter incase naay arrays
    counter = counter + 1;

}


function editData(id){
    cust_id = id;
    alert(id);
    window.location.href = "edit.php";
}

function deleteData(id){
    cust_id = id;
    alert(id);
    window.location.href = "delete.php"
}

function purchaseData(id){
    cust_id = id;
    alert(id);
    window.location.href = "purchase.php"
}

function returnData(id){
    cust_id = id;
    alert(id);
    window.location.href = "return.php"
}