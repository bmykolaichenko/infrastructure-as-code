# infrastructure-as-code
Main repo for working on IaC

```
ansible all -a "apt update" -u root
ansible all -a "apt install nginx" -u root
ansible all -i inventory  -a "rm -rf /var/www/html/wordpress" -u root 
```

```
ansible-playbook -i inventory playbook.yml
```

![my circuit](images/scheme.png)

