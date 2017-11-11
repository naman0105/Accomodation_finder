var no_of_rooms = 0;

document.getElementById('add').addEventListener("click",addRoom);


function addRoom(){
  no_of_rooms++;
  document.getElementById('no').innerHTML = "Types of Rooms ::" + no_of_rooms;
  var main = document.getElementById('room');

  var second = document.createElement('div');
  second.className = "form-group";
  var span = document.createElement("span");
  var t = document.createTextNode("Room Capacity :");
  span.appendChild(t);
  var input = document.createElement("input");
  input.name = "capacity" + no_of_rooms;
  input.className = "form-control";
  input.type = "number";
  input.id = "capacity" + no_of_rooms;
  second.appendChild(span);
  second.appendChild(input);

  var third = document.createElement('div');
  third.className = "form-group";
  var span = document.createElement("span");
  var t = document.createTextNode("No of Rooms :");
  span.appendChild(t);
  var input = document.createElement("input");
  input.type= "number";
  input.className = "form-control";
  input.name = "no_of_rooms" + no_of_rooms;
  input.id = "no_of_rooms" + no_of_rooms;
  third.appendChild(span);
  third.appendChild(input);

  var fourth = document.createElement('div');
  fourth.className = "form-group";
  var span = document.createElement("span");
  var t = document.createTextNode("Fees :");
  span.appendChild(t);
  var input = document.createElement("input");
  input.className = "form-control";
  input.type = "number";
  input.min = "100";
  input.name = "fees" + no_of_rooms;
  input.id = "fees" + no_of_rooms;
  fourth.appendChild(span);
  fourth.appendChild(input);

  var fifth = document.createElement('div');
  fifth.className = "form-group";
  var label = document.createElement("label");
  var t = document.createTextNode("Wifi : ");
  label.appendChild(t);
  var input = document.createElement("input");
  input.type ="checkbox";
  input.name = "wifi" + no_of_rooms;
  input.id = "wifi" + no_of_rooms;
  label.appendChild(input);
  fifth.appendChild(label);
  // fifth.appendChild(input);

  var sixth = document.createElement('div');
  sixth.className = "form-group";
  var label = document.createElement("label");
  var t = document.createTextNode("AC : ");
  label.appendChild(t);
  var input = document.createElement("input");
  input.type ="checkbox";
  input.name = "ac" + no_of_rooms;
  input.id = "ac" + no_of_rooms;
  label.appendChild(input);
  sixth.appendChild(label);

  var seven = document.createElement('div');
  seven.className = "form-group";
  var label = document.createElement("label");
  var t = document.createTextNode("Attached Bathroom : ");
  label.appendChild(t);
  var input = document.createElement("input");
  input.type ="checkbox";
  input.name = "bathroom" + no_of_rooms;
  input.id = "bathroom" + no_of_rooms;
  label.appendChild(input);
  seven.appendChild(label);

  main.appendChild(second);
  main.appendChild(third);
  main.appendChild(fourth);
  main.appendChild(fifth);
  main.appendChild(sixth);
  main.appendChild(seven);
  main.appendChild(document.createElement('hr'));
}
