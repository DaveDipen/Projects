import pwinput
rooml1=[]
bookedroom = []

roomtype1 = {
	"No":1,
	"Type":"Single Room",
	"Cost":500,
	"Total Rooms":20
}

roomtype2 = {
	"No":2,
	"Type":"Double Room",
	"Cost":1000,
	"Total Rooms":15
}

roomtype3 = {
	"No":3,
	"Type":"Deluxe Room",
	"Cost":1500,
	"Total Rooms":10
}

roomtype4 = {
	"No":4,
	"Type":"Suite Room",
	"Cost":2500,
	"Total Rooms":5
}

rooml1.append(roomtype1)
rooml1.append(roomtype2)
rooml1.append(roomtype3)
rooml1.append(roomtype4)

def viewRoom():
	print()
	print("Rooms Available")
	print()
	print("	%-5s%-15s%-8s%-8s" % ("No","Room Type","Cost","Available Rooms"))
	for i in rooml1:
		print("	%-5i%-15s%-8i%-8i"% (i['No'],i['Type'],i['Cost'],i['Total Rooms']))
	print()
	print()
	print()

def bookroom():
	userdetails= {}
	a = int(input("Enter a number of room type:-> "))
	for i in rooml1:
		if i['No'] == a:
			userdetails['Name'] = input("Enter Your Name:-> ")
			userdetails['Rooms'] = int(input("How many rooms you want to book:-> "))
			userdetails['Arrive'] = input("Enter Your Arriving Date:-> ")
			userdetails['Night'] = int(input("How many nights you will stay:-> "))
			userdetails['Cost'] = i['Cost'] * userdetails['Night']
			userdetails['Type'] = i['Type']
			bookedroom.append(userdetails)
			i['Total Rooms'] = i['Total Rooms'] - userdetails['Rooms']

				print("Name:-> ",userdetails['Name'])
			print("Room Type:-> ",userdetails['Type'])
			print("Booked Room:-> ",userdetails['Rooms'])
			print("Price Per Room:-> ",i['Cost'])
			print("Arriving Date:-> ",userdetails['Arrive'])
			print("Room Rent:-> ",userdetails['Cost'])

def cancel():
	ask = input("Enter Your Full Name:-> ")
	for i in bookedroom:
		if ask == i['Name']:
			for x in rooml1:
				if i['Type'] == x['Type']:
					x['Total Rooms'] = x['Total Rooms'] + i['Rooms']
			bookedroom.remove(i)	

def display():
	print("%-8s%-10s%-17s%-15s%-13s%-14s"%("Name","Rooms","Arrive","Night","Cost","Type"))
	for i in bookedroom:
		print("%-8s%-10s%-17s%-15s%-13s%-14s"%(i['Name'],i['Rooms'],i['Arrive'],i['Night'],i['Cost'],i['Type']))


def addroom():
	add = {}
	add['No'] = int(input("Enter No:-> "))
	add['Type'] = input("Enter Room Type:-> ")
	add['Cost'] = int(input("Enter Cost:-> "))
	add['Total Rooms'] = int(input("Enter Total Rooms Available:-> "))
	rooml1.append(add)


def update():
	print()
	print("Update Details")
	print()
	print("%-5s%-18s%-8s%-8s"%("No","Room Type","Cost","Rooms"))
	for i in rooml1:
		print("%-5i%-18s%-8i%-8i"%(i['No'],i['Type'],i['Cost'],i['Total Rooms']))
	print()
	ch = int(input("Enter the number of room Type you want to update:-> "))
	print()
	for i in rooml1:
		if i['No'] == ch:
			print("	1. Room Type")
			print(" 2. Cost")
			print("	3. Total Rooms")
			print()
			ch2 = int(input("	Enter what do you want to update? "))
			print()
			if ch2 == 1:
				newType = input("	Enter New Type:-> ")
				i['Type'] = newType
				print("Name Updated!")
				print()
				print("	%-18s%-8s%-8s" %("Type","Cost","Total Rooms"))
				print("	%-18s%-8i%-8i"%(i['Type'],i['Cost'],i['Total Rooms']))

			if ch2 == 2:
				newCost = int(input("Enter New Cost:->"))
				i['Cost'] = newCost
				print("Cost Updated!")
				print()
				print("	%-18s%-8s%-8s" % ("Type","Cost","Total Rooms"))
				print("	%-18s%-8i%-8i"% (i['Type'],i['Cost'],i['Total Rooms']))

			if ch2 == 3:
				newRoom = int(input("Enter New Room:-> "))
				i['Total Rooms'] = newRoom 
				print("Room Added!")
				print()
				print("%-18s%-8s%-8s" % ("Type","Cost","Total Rooms"))
				print("%-18s%-8i%-8i"% (i['Type'],i['Cost'],i['Total Rooms']))

while True:
	print()
	print()
	print("*****Login*****")
	print()
	print()
	uname = input("Username:-> ")
	pwd = pwinput.pwinput("Password:-> ")
	print()
	print()
	print()

	if uname == "Dipen" and pwd == "123":
		while True:
			print()
			print("		Shiv Hotel")
			print()
			print("	1. View Available Rooms			")
			print("	2. Book Room							")
			print("	3. Cancel Room							")
			print("	4. Details of Booked Room						")
			print("	5. Logout								")
			print("	6. Exit								")
			print("									")

			ch = int(input("What you want to do? "))
			print()

			if ch == 1:
				viewRoom()

			if ch == 2:
				viewRoom()
				bookroom()
				print("Room Booking Successful!")

			if ch == 3:
				cancel()
				print("Your Room Booking has been cancelled!")

			if ch == 4:
				display()

			if ch == 5:
				break

			if ch == 6:
				exit()

	if uname == "Admin" and pwd == "1234":
		while True:
			print()
			print("Shiv Hotel")
			print("	1. Add Room Types")
			print("	2. Details of Booked Room	")
			print("	3. Update Details")
			print("	4. Logout")
			print("	5. Exit")
			print()

			ch = int(input("Enter Your Choice:->"))
			if ch == 1:
				addroom()
				print("Room Added Successfully")

			if ch == 2:
				display()

			if ch == 3:
				update()
				print("Details Updated Successfully")

			if ch == 4:
				break 

			if ch == 5:
				exit()

