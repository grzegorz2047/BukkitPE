package net.BukkitPE.event.plugin;

import net.BukkitPE.event.Event;
import net.BukkitPE.event.HandlerList;
import net.BukkitPE.plugin.Plugin;

/**

 * BukkitPE Project
 */
public class PluginEvent extends Event {

    private static final HandlerList handlers = new HandlerList();

    private final Plugin plugin;

    public PluginEvent(Plugin plugin) {
        this.plugin = plugin;
    }

    public static HandlerList getHandlers() {
        return handlers;
    }

    public Plugin getPlugin() {
        return plugin;
    }
}
