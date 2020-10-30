# infrastructure-as-code
Main repo for working on IaC

```
ansible all -a "apt update" -u root
ansible all -a "apt install nginx" -u root
ansible sudo apt install php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip
```

```
ansible-playbook -i inventory playbook.yml
```
