# Filecoin/IPFS X PhpBB 

This project integrates [IPFS](https://ipfs.io)  in [PhpBB Forums](https://www.phpbb.com) to manage image uploads.

It adds a new feature in the post editor : A button to insert an IPFS hosted image.
The user can pick an image on filesystem, upload it on IPFS, and insert the image in the post.

- Live site : http://phpbb-ipfs.mywire.org
- Video demo : https://youtu.be/IRse5IiEr5E

The application uses [Web.Storage API](https://web3.storage) to store files on IPFS network.

## Test procedure

**_Procedure to  insert an IPFS image in a post :_**

- Connect to the demo site http://phpbb-ipfs.mywire.org
![1](https://ipfs.io/ipfs/bafkreibp6qvmel63n5p3hksjyo4qc4vlftpe35rxeq3dgyisvyr7vnlone?filename=1.png)

- Login with account : testuser/password
![2](https://ipfs.io/ipfs/bafkreifwkxjzghs2bujbpur3h6ey243bfmybnbu3uvc7g7y32tddqyw3tu?filename=2.png)

- Enter the test forum
![3_](https://ipfs.io/ipfs/bafkreiepcs5iurewwr44c5erfib3jyl23pqte7era7elvdey3mrjqr5p7u?filename=3_.png)

- Create a new topic
![4_](https://ipfs.io/ipfs/bafkreihv25k7wedbk7ey6xyvwbywi5eoype4bv7bsespoqnfdalsrdsjvu?filename=4_.png)

- Click on the insert image button
![5_](https://ipfs.io/ipfs/bafkreiao5sfcoirjqgjqksbvbkpqu5jxeyzrbg6rewv2stqdvzm6pemrdi?filename=5_.png)

- Select the image file
![6](https://ipfs.io/ipfs/bafkreigsj7pemug5gz5n35dinqvk4m4usqaeagfrfeyckcymyzsoxmdsbu?filename=6.png)

- The image is uploaded to the IPFS network and inserted into the post using a bbcode tag
![8_](https://ipfs.io/ipfs/bafkreihis6dbcnlvxdmmj4y2sr57ti7e2am547oal2c5vikfopsrra24pm?filename=8_.png)

- Publish the post 
![9](https://ipfs.io/ipfs/bafybeib2up4kvqnlryj3o5tiyg25mcz6dqv6tqpazdsipq3vvtpe2iagu4?filename=9.png)
