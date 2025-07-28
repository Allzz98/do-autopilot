variable "do_token" {
  description = "DigitalOcean API token"
  type        = string
}

variable "ssh_public_key_path" {
  description = "Path to your SSH public key"
  type        = string
  default     = "~/.ssh/id_rsa.pub"
}

variable "region" {
  description = "DigitalOcean region for the droplet"
  type        = string
  default     = "sydney"
}

variable "size" {
  description = "Droplet size (plan)"
  type        = string
  default     = "s-1vcpu-1gb"
}
