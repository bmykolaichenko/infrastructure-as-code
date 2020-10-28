# Configure the DigitalOcean Provider
terraform {
  required_providers {
    digitalocean = {
      source = "digitalocean/digitalocean"
      version = "2.0.1"
    }
  }
}

provider "digitalocean" {
  token = "71c772f1a6fc0cec1c65eda1d48a958d005d7abc5641bb160401824d307a18b1"
}

# Create a web server
data "digitalocean_ssh_key" "omykolaichenko"  {
  name = "omykolaichenko"
}
data "digitalocean_ssh_key" "bmykkolaichenko" {
  name = "bmykkolaichenko"
}
resource "digitalocean_droplet" "web" {
  count = 3
  image  = "ubuntu-20-04-x64"
  name   = "web-server-1"  # count.index
  region = "nyc3"
  size   = "s-1vcpu-1gb"
  ssh_keys = [data.digitalocean_ssh_key.omykolaichenko.id, data.digitalocean_ssh_key.bmykkolaichenko.id ]
}
