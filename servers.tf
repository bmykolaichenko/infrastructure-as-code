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
resource "digitalocean_droplet" "web" {
  image  = "ubuntu-20-04-x64"
  name   = "terraform-web-1"
  region = "nyc3"
  size   = "s-1vcpu-1gb"
  ssh_keys = [28718461, 28684255]
}
