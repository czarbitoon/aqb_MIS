//universal variables
var counter;


function getData(id, name, contact){



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
    b_editnode.setAttribute("onclick","<?php $_SESSION['id'] = " + id + "; header('Location: edit.php'); ?>");
    b_editnode.appendChild(b_textupdate);
    edit_acc.appendChild(b_editnode);

    var delete_acc = document.createElement("td");
    var b_deletenode = document.createElement("button");
    var b_textupdate = document.createTextNode("UPDATE");
    b_deletenode.setAttribute("onclick","<?php $_SESSION['id'] = " + id + "; ?>");
    b_deletenode.appendChild(b_textupdate);
    delete_acc.appendChild(b_deletenode);

    
    var update_acc = document.createElement("td");
    var b_updatenode = document.createElement("button");
    var b_textupdate = document.createTextNode("UPDATE");
    b_updatenode.setAttribute("onclick","<?php $_SESSION['id'] = " + id + "; ?>");
    b_updatenode.appendChild(b_textupdate);
    update_acc.appendChild(b_updatenode);


	var node1 = document.createElement("tr");
	node1.setAttribute("value", id);

    node1.appendChild(acc_id);
    node1.appendChild(acc_name);
    node1.appendChild(acc_contact);
    node1.appendChild(edit_acc);
    node1.appendChild(delete_acc);
    node1.appendChild(update_acc);

    document.getElementById("customer").appendChild(node1);
    //creating a counter incase naay arrays
    counter = counter + 1;

}
