def menor(a, b):
	if(a < b):
		return a
	if(b < a):
		return b
	return 0

for i in range(0,200):
	for j in ragen(200,0):
		print (menor(i,j))